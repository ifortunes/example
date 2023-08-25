<?php

namespace App\Prometheus\Sections\Cars\Actions\Sub;

use App\Prometheus\Sections\TypeTransactions\Actions\Custom\GetTypeTransactionAction;

class GetTypeTransactionsSub
{
    public function run()
    {
        return app(GetTypeTransactionAction::class)
            ->run();
    }
}
