<?php

namespace App\Http\Controllers;

use App\Http\Requests\TransactionRequest;
use App\Models\Transaction;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class TransactionController extends Controller
{
    public function index(Request $request)
    {
        // return view('transaction.index');
    }

    public function create() 
    {
        // return view('transaction.create');       
    }

    public function store(TransactionRequest $request)
    {      
        $incommingFields = $request->validated();

        try{
            Transaction::create([
                'description' => data_get($incommingFields, 'description'),
                'amount' => data_get($incommingFields, 'amount'),
                'type' => data_get($incommingFields, 'type'),
                'date' => data_get($incommingFields, 'date')
            ]);
        }catch(Exception $e){
            Log::error($e);

            return redirect()->route('home')->with('error', 'Erro ao registrar transação!');
        }

        return redirect()->route('home')->with('success', 'Transação registrada com sucesso!');
    }
}
