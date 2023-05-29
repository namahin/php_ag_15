<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AssignmentController extends Controller
{
    function RequestValidation():string{
        return "Your Request Validation is Successfully Done!";
    }

    function RequestRedirect():string{
        return "Request Submitted!";
    }
    function RequestRedirect2():string{
        return "Your Request Redirection is Successful!";
    }

    function  AuthAction():string{
        return "All OK 200";
    }
}
