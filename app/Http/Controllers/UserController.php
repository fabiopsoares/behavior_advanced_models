<?php

namespace LaraDev\Http\Controllers;

use Illuminate\Http\Request;
use LaraDev\Address;
use LaraDev\User;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        /*$user = User::find($id);
        echo "<h1>Dados do usuário</h1><br/>";
        echo "Nome do usuário: $user->name<br/>";
        echo "E-mail do usuário: $user->email<br/>";

        $userAddress = $user->addressDelivery()->get()->first();

        if($userAddress){
            echo "<h1>Endereço</h1>";
            echo "Endereço: {$userAddress->address}, {$userAddress->number}<br/>";
            echo "Complemento: {$userAddress->complement} CEP: {$userAddress->zipcode}<br/>";
            echo "Cidade / Estado: {$userAddress->city} / {$userAddress->state}";
        }

        $address_teste = new Address(
            ['address' => 'Manoel bandeira',
            'number' => '9433',
            'complement' => 'Casa',
            'zipcode' => '13188181',
            'city' => 'Hortolândia',
            'state' => 'SP'
            ]
        );

        $address = new Address();
        $address->address = 'Rua teste';
        $address->number = '200';
        $address->complement = 'nada';
        $address->zipcode = '13197456';
        $address->city = 'que isso';
        $address->state = 'SP';

        $address_teste_1 =  ['address' => 'Corruira 2',
        'number' => '5',
        'complement' => 'Casa',
        'zipcode' => '13197408',
        'city' => 'Monte Mor',
        'state' => 'SP'];

        $address_teste_2 =  ['address' => 'Corruira 3',
        'number' => '5',
        'complement' => 'Casa',
        'zipcode' => '13197408',
        'city' => 'Monte Mor',
        'state' => 'SP'];*/

        //$user->addressDelivery()->save($address);
        //$user->addressDelivery()->save($address_teste);
        //$user->addressDelivery()->create($address_teste_1);
        //$user->addressDelivery()->saveMany([$address,$address_teste]);
        //$user->addressDelivery()->createMany([$address_teste_1,$address_teste_2]);

        //$users  = User::with('addressDelivery')->get();

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
