<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mail da Boolpress</title>
</head>
<body>
    <h3>
        <strong>
            {{ $sender }}
        </strong>
        has tried to contact you through boolpress.com
    </h3>
    <h3>
        {{$sender}} email address is
        <strong>
            {{ $senderEmail }}
        </strong>
    </h3>
    <p>
        <pre>
            This is the message:
        </pre>
        {{ $senderMessage }}
    </p>
</body>
</html>
