TRANSACTION
=================
  Maintain record of financial transactions on the platform
  DATA {
    type [BANK|CASH|GATEWAY]
    amount
    currency [NGN]

    summary
    purpose [VOUCHER|BALLOT]

    reference id
    status (payment gateway transaction status)
    transaction_id (returned by gateway)
    provider [FLUTTERWAVE]
  }


VOUCHER
=================
  Maintain voucher generation and utilization on the platform
  DATA {
    bind (reference for transaction)
    condition: NEW → [SOLD|PENDING|INVALID] → USED

    serial (random serial number - 18 ~ SN0966273439241069)
    code (random voucher code - [12] ~ AY83LM885601)
    cost (cost price for the voucher)
    value (number of votes)
    finalist (id of the finalist ~ ekom)

    name
    email
    phone
  }


CASTING (VOTE CASTING)
=================
  Maintain vote casting record for proof of vote collation
  DATA {
    vote (number of votes)
    type [VOUCHER|DEPOSIT|FREE]
    finalist (id of the finalist ~ ekom)
    bind (reference bind for deposit or voucher)
  }


BALLOT (BALLOT RESULT)
=================
  Maintain voting live result (vote count)
  DATA {
    finalist (id of the finalist ~ ekom)
    ballot (total number of votes)
    amount (amount generated)
  }


FINALIST
=================
  Maintain finalist profile information
  DATA {
    name
    id
    youtube
    bio
  }












