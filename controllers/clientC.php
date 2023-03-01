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
        <td>'.$client->Dob->format('Y-m-d').'</td>
        </tr></tbody>
        </table>';
    }
}
