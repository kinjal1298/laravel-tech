@extends('master')
@section('content')
<div class="app-content content">
    <div class="content-wrapper">
        <div class="content-body p-0 btn_color" >
            <section class="flexbox-container">
                <div class="col-12 d-flex align-items-center justify-content-center">
                    <div class="col-md-4 col-10 box-shadow-2 p-0">
                        <div class="card border-grey border-lighten-3 px-1 py-1 m-0">
                            <div class="card-header border-0">
                                <div class="card-title text-center">
                                  
                                    <h2 class="header_color">Techrudite</h2>
                            	</div>
                            <div class="card-body">
                                <form id="product_form" class="form-horizontal" action="add/submit" method="POST">
                                	<fieldset class="form-group position-relative has-icon-left">
                                    	@csrf
                                        <select class="form-control" name="category">
                                        	<option value="">Select product</option>
                                        	<option value="computer">Computer</option>
                                        	<option value="laptop">Laptop</option>
                                        	<option value="tablate">Tablate</option>
                                        	<option value="phone">Phone</option>

                                        </select>
                                    </fieldset>
                                    <fieldset class="form-group position-relative has-icon-left">
                                        <input type="text" class="form-control" id="product_name" name="product_name" placeholder="Product Name">
                                    </fieldset>
                                    <fieldset class="form-group position-relative has-icon-left">
                                        <input type="number" class="form-control" id="price" name="price" placeholder="Enter Price" />
                                    </fieldset>
                                    <div class="form-group row">
                                        <div class="col-12 text-center text-sm-left">
                                            <button type="submit" id="admin_login_submit" class="btn btn-outline-first btn-block"><i id="unlock_i" class="ft-unlock"></i> Submit</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
</div>
@endsection
