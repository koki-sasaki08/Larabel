<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JissyuController extends Controller
{
    public function index() {

        return <<<EOF
    <html>
    <head>
    <title>Hello/Index</title>
    <style>
    body {font-size:16pt; color:#999; }
    h1 { font-size:100pt; text-align:right; color:#eee;
        margin:-40px 0px -50px 0px; }
    </style>
    </head>
    <body>
        <h1>Index</h1>
        <p>これは、Jissyuコントローラのindexアクションです。</p>
    </body>
    </html>
    EOF;
    
    }
 
}
