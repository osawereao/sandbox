<?php
class VoteApp {

  function DBUG($i){
    echo '<pre><tt>'.var_export($i, true).'</tt></pre>';
  }

  private function DBConnect(){
    $dsn = 'mysql:dbname='.$this->config['db']['database'].';host='.$this->config['db']['host'];
    try {
      $this->pdo = new PDO($dsn, $this->config['db']['user'], $this->config['db']['password']);
    } catch(PDOException $e){
      exit('<strong>ERROR:</strong> <em>'.$e->getMessage().'</em>');
    }
  }

  private function DBErrorMsg($obj){
    if($obj === false){return 'oFALSE';}
    elseif($obj !== true){
      #TODO: make sure $obj is valid PDO Object or PDOStatement;
      return $obj->errorInfo()[2];
    }
  }

  private function DBError($obj, $extra=''){
    if(!empty($extra)){
      exit('<strong>ERROR:</strong> '.$this->DBErrorMsg($obj).' <em>('.$extra.')</em>');
    }
    else {
      exit('<strong>ERROR:</strong> '.$this->DBErrorMsg($obj));
    }
  }

  private function DBQuery($sql, $param='', $instruction=''){
    $connect = $this->pdo;
    $stmt = $connect->prepare($sql);
    if(!empty($this->DBErrorMsg($stmt))){
      #ERROR: Failed to prepare query
      $this->DBError($stmt, __FUNCTION__.' ~ prepare query failed');
    }
    if(empty($param)){$execute = $stmt->execute();} else {$execute = $stmt->execute($param);}
    if(!empty($this->DBErrorMsg($stmt))){$this->DBError($stmt, '<small><strong>'.$sql.'</strong></small>');}
    elseif(!empty($this->DBErrorMsg($execute))){$this->DBError($execute);}
    elseif($execute === true){
      if($instruction === 'BOOL'){return 'oTRUE';}
      elseif($instruction === 'FETCH'){return $stmt->fetch(PDO::FETCH_ASSOC);}
      elseif($instruction === 'FETCHALL'){return $stmt->fetchAll(PDO::FETCH_ASSOC);}
      return $execute;
    }
  }

  public function DBInit($user, $password, $database, $host='localhost'){
    $this->config['db']['user'] = $user;
    $this->config['db']['password'] = $password;
    $this->config['db']['database'] = $database;
    $this->config['db']['host'] = $host;
    $this->DBConnect();
    return;
  }




  #TOTAL VOTES
  public function TotalVote(){
    $sql = 'SELECT SUM(`ballot`) AS `Votes` FROM `ballot`';
    $result = $this->DBQuery($sql, '', 'FETCH');
    if(isset($result['Votes'])){return $result['Votes'];}
    return false;
  }


  #TOTAL REVENUE
  public function TotalRevenue(){
    $sql = 'SELECT SUM(`amount`) AS `Revenue` FROM `ballot`';
    $result = $this->DBQuery($sql, '', 'FETCH');
    if(isset($result['Revenue'])){return $result['Revenue'];}
    return false;
  }


  #TOTAL VOTES FOR A FINALIST
  public function TotalVoteByID($finalist){
    $sql = 'SELECT `ballot` AS `Votes` FROM `ballot` WHERE `ouser` = :finalist LIMIT 1';
    $result = $this->DBQuery($sql, [':finalist' => $finalist], 'FETCH');
    if(isset($result['Votes'])){return $result['Votes'];}
    return false;
  }


  #TOTAL REVENUE FOR A FINALIST
  public function TotalRevenueByID($finalist){
    $sql = 'SELECT SUM(`amount`) AS `Revenue` FROM `ballot` WHERE `ouser` = :finalist LIMIT 1';
    $result = $this->DBQuery($sql, [':finalist' => $finalist], 'FETCH');
    if(isset($result['Revenue'])){return $result['Revenue'];}
    return false;
  }


  #TOTAL NUMBER OF FINALIST WITH VOTES
  public function TotalFinalistWithVotes(){
    $sql = 'SELECT COUNT(`auid`) AS `Total` FROM `ballot`';
    $result = $this->DBQuery($sql, '', 'FETCH');
    if(isset($result['Total'])){return $result['Total'];}
    return false;
  }


  #PROFILE OF ALL FINALIST
  public function Finalist(){
    $sql = 'SELECT * FROM `finalist`';
    $result = $this->DBQuery($sql, '', 'FETCHALL');
    if(isset($result[0]['auid'])){return $result;}
    return false;
  }


  #PROFILE OF A FINALIST
  public function FinalistByID($finalist){
    $sql = 'SELECT * FROM `finalist` WHERE `ouser` = :finalist LIMIT 1';
    $result = $this->DBQuery($sql, [':finalist' => $finalist], 'FETCHALL');
    if(isset($result[0]['auid'])){return $result;}
    return false;
  }


  #ALL FINALIST PROFILE WITH RANKING
  public function FinalistRanking(){
    $sql = 'SELECT *, FIND_IN_SET(`ballot`, (SELECT GROUP_CONCAT(`ballot` ORDER BY `ballot` DESC) FROM `ballot`)) AS `ranking` FROM `ballot`';
    $result = $this->DBQuery($sql, '', 'FETCHALL');
    if(isset($result[0]['ranking'])){return $result;}
    return false;
  }



  #A FINALIST PROFILE WITH RANKING
  public function FinalistByIDRanking($finalist){
    $sql = 'SELECT *, FIND_IN_SET(`ballot`, (SELECT GROUP_CONCAT(`ballot` ORDER BY `ballot` DESC) FROM `ballot`)) AS `ranking` FROM `ballot`  WHERE `ouser` = :finalist LIMIT 1';
    $result = $this->DBQuery($sql, [':finalist' => $finalist], 'FETCHALL');
    if(isset($result[0]['ranking'])){return $result;}
    return false;
  }



}