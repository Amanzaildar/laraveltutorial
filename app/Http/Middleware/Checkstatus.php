<?php

namespace App\Http\Middleware;

use App\Enum\Statusenum;
use App\Models\Product;
use Closure;
use Illuminate\Http\Request;

class Checkstatus
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        $id = $request->route('id');
        $product = Product::where( 'id','=',$id)->first();
        if($product->status== Statusenum::status){
            return $next($request);
        }
        return response()->json('Your Product is inactive');
    }
}
