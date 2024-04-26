<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ProfileController extends Controller
{
    public function index()
    {
        //return response('This is your profile page.');
        return view('profile');
    }
}
