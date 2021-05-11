<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use App\Model\Product;
class ProductController extends Controller
{
	function add(Request $rqst)
	{ 
		$validatedData = $rqst->validate([
		    'category' =>	['required'],
		    'product_name' => ['required'],
		    'price' => ['required'],
		]);
		if(isset($validatedData) && !empty($validatedData))
		{
			$post =  $rqst->input();
			$product_array = array(
				'category' =>$post['category'],
				'product_name' =>$post['product_name'],
				'price' =>$post['price'],
				'status' =>'1',
				'created_at' =>date('Y-m-d h:s:i'));
			$inserted = Product::insert($product_array);
			return redirect('dashboard');
		}
		else
		{
			return $rqst->input();	
		}
		
	}
}
?> 