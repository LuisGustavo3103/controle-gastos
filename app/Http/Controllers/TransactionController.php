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
        $transactions = Transaction::query()->orderByDesc('created_at')->get();

        return view('transactions.index', [
            'transactions' => $transactions
        ]);
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

            return redirect()->route('transaction.index')->with('error', 'Erro ao registrar transação!');
        }

        return redirect()->route('transaction.index')->with('success', 'Transação registrada com sucesso!');
    }
}
