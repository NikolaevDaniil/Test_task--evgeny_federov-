<?php

namespace App\Http\Middleware;

use App\Services\JsonRpcClient;
use Closure;
use Illuminate\Http\Request;


class Visitor
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */

    public function handle(Request $request, Closure $next)
    {
        $client = new JsonRpcClient();
        $client->send('visit@save', [
            'url' => request()->fullUrl(),
        ]);
        return $next($request);
    }
}
