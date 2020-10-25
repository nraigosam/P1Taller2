@extends('layout')

@section('content')
<h2>game</h2>

<!-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">

            <div class="card w-75">
                <div class="card-body">
                    <h5 class="card-title"></h5>
                    <form method="POST">
                        {{csrf_field()}}

                        <fieldset id="enteredValue">
                            <h3><legend>ingrese un color</legend></h3>
                            <input id="guesstext" type="text" name="enteredValue" autofocus id="two" />
                            <input id="guessbutton" type="submit" value="Guess" id="two" class="btn btn-primary" />
                        </fieldset>
                    </form>
                </div>
            </div>

        </div>
    </div>
</div> -->
<form method="POST">
        {{csrf_field()}}
        <fieldset>
            Color: <input type="text" name="campo1" value="">
            <input id="colorIn" type="submit" value="Enviar"/>
        </fieldset>
</form>
<h1><p><label id="answer" for="nam"><?php print($_POST['answer']) ?></label></p></h1>
<h1><p><label id="CorrectAnswer" for="nam"><?php print($_POST['CorrectAnswer']) ?></label></p></h1>
<h1><p><label id="mensaje" for="nam"><?php print($_POST['mensaje']) ?></label></p></h1>

@endsection