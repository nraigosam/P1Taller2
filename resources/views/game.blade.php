@extends('layout')

@section('content')
<h2>game</h2>

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