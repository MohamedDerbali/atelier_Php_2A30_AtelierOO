<?php 

class clientC{
    public function showClient($client){
        echo '<table border="1">
        <thead>
        <th>Last Name</th>
        <th>First Name</th>
        <th>Phone</th>
        <th>Address</th>
        <th>Date of Birth</th>
        </thead>
        <tbody><tr>
        <td>'.$client->lastName.'</td>
        <td>'.$client->firstName.'</td>
        <td>'.$client->phone.'</td>
        <td>'.$client->address.'</td>
        </tr></tbody>
        </table>';
    }
    public function addClient($client, $pdo){
        // $x = 20;???????
        // $note = 20;
        // $name = "ali";
        // camel case
        // helloworld => helloWorld => les methodes doit etre en camel case
        try {
            $query = $pdo->prepare('INSERT into client(lastName, firstName, password, phone, address) 
            VALUES (:lastName, :firstName, :password, :phone, :address)');
            $query->execute([
                'lastName' => $client->lastName, 
                'firstName' => $client->firstName, 
                'password' => $client->password, 
                'phone' =>  $client->phone, 
                'address' => $client->address, 
                // 'Dob' => $client->Dob
            ]);
    
        } catch (PDOException $e) {
            echo $e->getMessage();
            //throw $th;
        }
    }
    public function displayClients(){

    }
    public function deleteClient(){

    }
    public function updateClient(){

    }
    public function searchClient(){

    }
    public function sortClient(){

    }
    public function clientStatics(){

    }
}
