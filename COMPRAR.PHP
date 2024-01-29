<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pasarela de Pagos</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f4f4f4;
        }

        form {
            position: relative;
            width: 300px;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
            text-align: center;
            border: 2px solid #3498DB ;
        }

        h1 {
            color: #ffffff;
            font-size: 24px;
            margin-bottom: 20px;
            font-weight: bold;
            background-color: #3498DB ;
            padding: 10px;
            border-radius: 5px;
            border: 2px solid #3498DB ;
        }

        label {
            display: block;
            margin-bottom: 8px;
            color: #333333;
        }

        input, select {
            width: 100%;
            padding: 8px;
            margin-bottom: 16px;
            box-sizing: border-box;
            border: 1px solid #3498DB ;
            border-radius: 5px;
        }

        input::placeholder {
            color: #3498DB ;
            border-radius: 5px;
        }

        button {
            background-color: #4caf50;
            color: #ffffff;
            padding: 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            margin-right: 5px;
            font-size: 16px;
            font-weight: bold;
        }

        .cancel-button {
            background-color: #ff0000;
            color: #ffffff;
            padding: 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            font-weight: bold;
        }

        .small-image {
            width: 310px;
            margin: 0 auto;
            display: block;
        }
        select {
            width: 100%;
            padding: 8px;
            margin-bottom: 16px;
            box-sizing: border-box;
            border: 1px solid #3498DB;
            border-radius: 5px;
            background-color: #3498DB; /* Color de fondo azul */
            color: #ffffff; /* Color del texto blanco */
}
    </style>
</head>
<body>

<form>
    <h1>PAGO WEB</h1>

    <label for="cardNumber">Número de tarjeta:</label>
    <input type="text" id="cardNumber" name="cardNumber" placeholder="Ingrese el número de tarjeta" required>

    <label for="expiryDate">Fecha de vencimiento:</label>
    <div style="display: flex; gap: 10px;">
        <select id="expiryMonth" name="expiryMonth">
            <option value="" disabled selected>Mes</option>
            <option value="01">01</option>
            <option value="02">02</option>
            <option value="03">03</option>
            <option value="04">04</option>
            <option value="05">05</option>
            <option value="06">06</option>
            <option value="07">07</option>
            <option value="08">08</option>
            <option value="09">09</option>
            <option value="10">10</option>
            <option value="11">11</option>
            <option value="12">12</option>
        </select>
        <select id="expiryYear" name="expiryYear">
            <option value="" disabled selected>Año</option>
            <option value="2023">23</option>
            <option value="2024">24</option>
            <option value="2025">25</option>
            <option value="2026">26</option>
            <option value="2027">27</option>
            <option value="2028">28</option>
        </select>
    </div>

    <label for="cvv">CVV:</label>
    <input type="text" id="cvv" name="cvv" placeholder="CVV" required>

    <label for="cardHolder">Titular de la tarjeta:</label>
    <input type="text" id="cardHolder" name="cardHolder" placeholder="Nombre del titular" required>

    <label for="email">Correo Electrónico:</label>
    <input type="email" id="email" name="email" placeholder="Ingrese su correo electrónico" required>

    <img class="small-image" src="img/formas.jpg" alt="Imagen pequeña">

    <button type="button" class="cancel-button">CANCELAR</button>
    <button type="submit">PAGAR</button>

</form>

</body>
</html>
