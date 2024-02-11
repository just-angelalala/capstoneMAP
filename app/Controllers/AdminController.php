<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class AdminController extends BaseController
{
    public function admindashboard()
    {
        return view ('admin/index');
    }

    public function adminproductlist()
    {
        return view ('admin/productlist');
    }

    public function adminproductadd()
    {
        return view ('admin/addproduct');
    }

    public function admincategorylist()
    {
        return view ('admin/categorylist');
    }

    public function adminaddcategory()
    {
        return view ('admin/addcategory');
    }

    public function adminsalelist()
    {
        return view ('admin/salelist');
    }

    
    public function adminaddsale()
    {
        return view ('admin/addsale');
    }

    
    public function adminpurchaselist()
    {
        return view ('admin/purchaselist');
    }

    public function adminaddpurchase()
    {
        return view ('admin/addpurchase');
    }

    public function adminreturnlist()
    {
        return view ('admin/returnlist');
    }

    public function adminaddreturn()
    {
        return view ('admin/addreturn');
    }

    public function admincustomerlist()
    {
        return view ('admin/customerlist');
    }

    public function adminuserlist()
    {
        return view ('admin/userlist');
    }

    public function adminsupplierlist()
    {
        return view ('admin/supplierlist');
    }

    public function adminaddsupplier()
    {
        return view ('admin/addsupplier');
    }

    public function adminreport()
    {
        return view ('admin/report');
    }




    public function adminPOS()
    {
        return view ('admin/POS');
    }


    

    public function signin()
    {
        return view ('auth/signin');
    }

    public function signup()
    {
        return view ('auth/signup');
    }
}
 