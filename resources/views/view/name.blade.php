<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Email de Teste</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f4f4f4;
      margin: 0;
      padding: 20px;
    }
    .email-container {
      background-color: #ffffff;
      max-width: 600px;
      margin: auto;
      padding: 20px;
      border-radius: 6px;
      box-shadow: 0 0 10px rgba(0,0,0,0.1);
    }
    h1 {
      color: #333333;
    }
    p {
      color: #555555;
      line-height: 1.5;
    }
    .btn {
      display: inline-block;
      margin-top: 20px;
      padding: 12px 24px;
      background-color: #007bff;
      color: #ffffff !important;
      text-decoration: none;
      border-radius: 4px;
      font-weight: bold;
    }
    .footer {
      margin-top: 30px;
      font-size: 12px;
      color: #888888;
      text-align: center;
    }
  </style>
</head>
<body>
  <div class="email-container">
    <h1>Olá, {{ $nome ?? 'Teste de Email' }}!</h1>
    <p>Este é um email de teste simples para verificar a funcionalidade de envio.</p>
    <p>Clique no botão abaixo para confirmar sua ação:</p>
    <a href="{{ $link ?? '#' }}" class="btn">Confirmar</a>

    <div class="footer">
      <p>Se você não solicitou este email, ignore-o.</p>
    </div>
  </div>
</body>
</html>
