<?php
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;


$app = new \Slim\App;

 //Get All customers

 $app->get('/datas', function(Request $request, Response $response){

   $sql = "SELECT * FROM donnee";

   try {
      //get DB
      $db = new db();
      // Connection
      $db = $db->connect();

      $stmt = $db->query($sql);
      $customers = $stmt->fetchAll(PDO::FETCH_OBJ);
      $db = null;
      echo json_encode($customers);
   } catch (PDOException $e) {
     echo '{"error": {"text": '.$e->getMessage(). '}';
   }
 });

 //Get Single customers

 $app->get('/thingspeak/sonde/API/donnee/{id}', function(Request $request, Response $response){
   $id = $request->getAttribute('id');


   $sql = "SELECT * FROM donnee WHERE id = $id";

   try {
      //get DB
      $db = new db();
      // Connection
      $db = $db->connect();

      $stmt = $db->query($sql);
      $customer = $stmt->fetchAll(PDO::FETCH_OBJ);
      $bd = null;
      echo json_encode($customer);
   } catch (PDOException $e) {
     echo '{"error": {"text": '.$e->getMessage(). '}';

  }

 });

 // Add single donnee

      $app->post('/add/data', function(Request $request, Response $response){
        $temperature = $request->getParam('value1');
        $humidite = $request->getParam('value2');

        $sql = "INSERT INTO donnee (temperature,humidite) VALUES (:value1, :value2)";

        try {
           //get DB
           $db = new db();
           // Connection
           $db = $db->connect();


           $stmt = $db->prepare($sql);

           $stmt->bindParam(':value1', $temperature);
           $stmt->bindParam(':value2', $humidite);

           $stmt->execute();

           echo '{"notice": {"text": "donnees enregistre"}';

           } catch (PDOException $e) {
           echo '{"error": {"text": '.$e->getMessage(). '}';

       }

      });

      //Get Single customers

      $app->get('/data/{date_fin}', function(Request $request, Response $response){
        $date_debut = $request->getAttribute('date_fin');


        // $sql = "SELECT * FROM donnee WHERE date_debut BETWEEN 'value1' AND 'value2'";
        $sql = "SELECT * FROM donnee WHERE date_fin = $date_fin";
        try {
           //get DB
           $db = new db();
           // Connection
           $db = $db->connect();

           $stmt = $db->query($sql);
           $donnee = $stmt->fetchAll(PDO::FETCH_OBJ);
           $bd = null;
           echo json_encode($donnee);
        } catch (PDOException $e) {
          echo '{"error": {"text": '.$e->getMessage(). '}';

       }

      });
