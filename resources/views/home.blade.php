<!DOCTYPE <html>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Sistema Mentor</title>
    </head>
    <body>
    <h1> sistema Mentor </h1>
    <div>
        <h2> Faça seu login:</h2>
        <form action="/logar" method="POST">
            <input type="text" name = "login">
            <input type="text" name = "senha">
            
            <button> Login </button>
        </form>

    </div> 
    <div>
        <h2> Faça seu cadastro </h2>
        <form action= "/cadastrar" method="POST">
            @csrf
            <label for="cadastro-login">Login: </label>
            <input value={{old('nome')}}type="text" name="nome" id="cadastro_login">
            @error('nome')
                {{$message}}
            @enderror

            <label for="cadastro-email">Email; </label>
            <input value={{old('email')}} type="text" name="email" id="cadastro_email">
            @error('email')
                {{$message}}
            @enderror

            <label for="cadastro-senha">senha: </label>
            <input value={{old('senha')}} type="password" name="senha" id="cadastro_senha">
            @error('senha')
            {{$message}}
        @enderror


            <label for="cadastro-confirmcao-senha">confirme sua senha </label>
            <input value={{old('password')}} type="password" name="senha_confirmation" id="cadastro-senha-confirmacao">
            @error('senha_confirmation')
            {{$message}}
        @enderror

            <button> Cadastrar </button>
        </form>

</body>
</html>
</html>