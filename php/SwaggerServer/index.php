<?php
require_once __DIR__ . '/vendor/autoload.php';

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Silex\Application;

$app = new Silex\Application();


$app->GET('/josephrossetto/ebi_training_knowledge_framework/0.0.1/cp', function(Application $app, Request $request) {
            $search_string = $request->get('search_string');    $skip = $request->get('skip');    $limit = $request->get('limit');    
            
            return new Response('How about implementing searchCp as a GET method ?');
            });


$app->GET('/josephrossetto/ebi_training_knowledge_framework/0.0.1/kb', function(Application $app, Request $request) {
            $search_string = $request->get('search_string');    $skip = $request->get('skip');    $limit = $request->get('limit');    
            
            return new Response('How about implementing searchKb as a GET method ?');
            });


$app->DELETE('/josephrossetto/ebi_training_knowledge_framework/0.0.1/kb/{trId}', function(Application $app, Request $request, $tr_id) {
            
            
            return new Response('How about implementing deleteTrainingResource as a DELETE method ?');
            });


$app->GET('/josephrossetto/ebi_training_knowledge_framework/0.0.1/kb/{trId}', function(Application $app, Request $request, $tr_id) {
            
            
            return new Response('How about implementing getTrainingResourceId as a GET method ?');
            });


$app->POST('/josephrossetto/ebi_training_knowledge_framework/0.0.1/kb/{trId}', function(Application $app, Request $request, $tr_id) {
            
            $name = $request->get('name');    $location = $request->get('location');    
            return new Response('How about implementing updateTrainingResourceWithForm as a POST method ?');
            });


$app->run();
