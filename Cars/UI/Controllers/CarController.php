<?php
declare(strict_types=1);

namespace App\Prometheus\Sections\Cars\UI\Controllers;

use App\Prometheus\Http\Controllers\BaseController;

use App\Prometheus\Sections\Cars\Actions\{
    Rest\CreateAction,
    Rest\IndexAction,
    Rest\RemoveAction,
    Rest\ShowAction,
    Rest\StoreAction,
    Rest\UpdateAction
};

use App\Prometheus\Sections\Cars\UI\Requests\{
    IndexRequest, StoreRequest, UpdateRequest
};
use Illuminate\Http\Request;
class CarController extends BaseController
{
    public function index(IndexRequest $request)
    {
        try {
            return app(IndexAction::class)
                ->run($request->getDto());
        }catch (\Exception $e){
            return $e->getMessage();
        }
    }

    public function create()
    {
        try {
            return app(CreateAction::class)
                ->run();
        }catch (\Exception $e){
            return $e->getMessage();
        }
    }

    public function store(StoreRequest $request)
    {
        try {
            return app(StoreAction::class)
                ->run($request->getDto());
        }catch (\Exception $e){
            return $e->getMessage();
        }
    }

    public function show(int $id)
    {
        try {
            return app(ShowAction::class)
                ->run($id);
        }catch (\Exception $e){
            return $e->getMessage();
        }
    }

    public function update(UpdateRequest $request)
    {
        try {
            return app(UpdateAction::class)
                ->run($request->getDto());
        }catch (\Exception $e){
            return $e->getMessage();
        }
    }

    public function delete(int $id)
    {
        try {
            return app(RemoveAction::class)
                ->run($id);
        }catch (\Exception $e){
            return $e->getMessage();
        }
    }
}
