@extends('layout.app')

@php

    use App\Enums\TypeTransactionEnum;

@endphp

@section('content')
    <div class="bg-gray-200">
        <div class="max-w-7xl mx-auto py-3">
            <div class="bg-white rounded-2xl p-8">
                <p class="font-bold text-3xl">Controle Financeiro</p>
                <p class="text-gray-500">Gerencie suas transações bancárias</p>
            </div>
            <div class="grid grid-cols-3 space-x-3 py-3">
                <div class="bg-white rounded-2xl p-5">
                    <p class="text-gray-500">Total de Entradas</p>
                    <p class="text-2xl text-green-500 font-bold">R$1000,00</p>
                </div>
                <div class="bg-white rounded-2xl p-5">
                    <p class="text-gray-500">Total de Saídas</p>
                    <p class="text-2xl text-red-500 font-bold">R$1000,00</p>
                </div>
                <div class="bg-white rounded-2xl p-5">
                    <p class="text-gray-500">Saldo Atual</p>
                    <p class="text-2xl text-blue-500 font-bold">R$1000,00</p>
                </div>
            </div>
            <div class="bg-white rounded-2xl p-5">
                <p class="font-bold text-2xl">Nova Transação</p>
                <form action="{{ route('transaction.store') }}" method="POST">
                    @csrf
                    <label for="amount">Valor
                        <input
                            class="rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 mb-2 w-full"
                            name="amount" id="amount" type="text" placeholder="0,0" required>
                    </label>
                    <div class="grid grid-cols-2 space-x-1.5">
                        <div>
                            <label for="description">Descrição
                                <input
                                    class="rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 mb-2 w-full"
                                    name="description" id="description" type="text"
                                    placeholder="Ex: Sálario, Cartão, Energia..." required>
                            </label>
                        </div>
                        <div>
                            <label for="date">Data
                                <input
                                    class="rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 mb-2 w-full"
                                    type="date" name="date" id="date" required>
                            </label>
                        </div>
                    </div>
                    <p>Tipo de Transação</p>
                    <div class="grid grid-cols-2 py-2 space-x-2">
                        <input class="absolute opacity-0" type="radio" id="entrada" name="type"
                            value="{{ TypeTransactionEnum::RECEIVED->value }}">
                        <label class="bg-green-500 text-white text-center font-bold py-3 rounded-md cursor-pointer"
                            for="entrada">Entrada</label>
                        <input class="absolute opacity-0" type="radio" id="saida" name="type"
                            value="{{ TypeTransactionEnum::SENT->value }}">
                        <label class="bg-red-500 text-white text-center font-bold py-3 rounded-md cursor-pointer"
                            for="saida">Saída</label>
                    </div>
                    <button type="submit"
                        class="bg-blue-500 w-full rounded-md py-3 text-white font-bold cursor-pointer">Adicionar
                        transação</button>
                </form>
            </div>
            <div class="bg-white rounded-2xl p-5 mt-3">
                <p class="font-bold text-2xl py-4">Transações Recentes</p>
                <div class="flex justify-between bg-gray-100 p-2 rounded-md items-center mt-2">
                    <div>
                        <p class="font-bold">Salário</p>
                        <p>01/10/25</p>
                    </div>
                    <p class="text-green-500 font-bold">+ R$ 5.000,00</p>
                </div>
                <div class="flex justify-between bg-gray-100 p-2 rounded-md items-center mt-2">
                    <div>
                        <p class="font-bold">Energia</p>
                        <p>01/10/25</p>
                    </div>
                    <p class="text-red-500 font-bold">- R$ 1.000,00</p>
                </div>

            </div>
        </div>
    </div>
@endsection
