@extends('layouts.template')
@section('content')
<header>
        <div class="row">
            <div class="col-12">
                <h1>Welcome to Dwarf Boi Generator</h1>
            </div>
        </div>
    </header>
    <section class="section-one">
        <div class="row">
            <div class="col-12">
                <p>Click the button below to generate 10 dwarf bois</p>
                <button class="btn btn-primary GenerateButton">Generate!</button>
                <div class="dwarf-names"></div>
            </div>
        </div>
    </section>
    <footer>
        <p>This is a multiple Robert's Production</p>
    </footer>
@stop

