<?php

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\Factory\AppFactory;

$app->get(
    '/database-connection-string',
    function (Request $request, Response $response) {
        $response->getBody()->write('
        <html>
            <head>
                <title>Database Connection String Disclosure</title>
                <style>
                    .bubble1{
                        width: 400px;
                        height: 400px;
                        background-color: #000;
                        border-radius: 50%;
                        position: fixed;
                        z-index: -1;
                        top: -200px;
                        left: 800px;
                    }

                    .bubble2{
                        width: 400px;
                        height: 400px;
                        background-color: #000;
                        border-radius: 50%;
                        position: fixed;
                        z-index: -1;
                        top: 200px;
                        left: 100px;
                    }

                    .bubble3{
                        width: 300px;
                        height: 300px;
                        background-color: #000;
                        border-radius: 50%;
                        position: fixed;
                        z-index: -1;
                        top: 300px;
                        left: 800px;
                    }

                    .bubble4{
                        width: 200px;
                        height: 200px;
                        background-color: #000;
                        border-radius: 50%;
                        position: fixed;
                        z-index: -1;
                        top: 5px;
                        left: 50px;
                    }

                    .bubble5{
                        width: 350px;
                        height: 350px;
                        background-color: #000;
                        border-radius: 50%;
                        position: fixed;
                        z-index: -1;
                        top: 100px;
                        left: 1200px;
                    }
                </style>
            <head>
            <body style="background-color: #f9bf1e">
                <h1 style="text-align: center; font-family: sans-serif;">Rick & Morty</h1>
                <div style="width: 50%; margin: auto;">
                    <img src="https://raw.githubusercontent.com/karthikuj/karthikuj/master/images/rick-and-morty-web.webp" title="Wubba Lubba Dub Dub">
                </div>
                <!-- 
                Remember to delete this later: Provider=PostgreSQL OLE DB Provider;Data Source=myServerAddress;location=myDataBase;User ID=myUsername;password=myPassword;timeout=1000;
                -->
                <p class="bubble1"></p>
                <p class="bubble2"></p>
                <p class="bubble3"></p>
                <p class="bubble4"></p>
                <p class="bubble5"></p>
            </body>
        </html>
        ');
        return $response->withHeader("content-type", "text/html")
                        ->withStatus(200);
    }
);