<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no,  initial-scale=1.0">
    <title>つぶやきアプリ</title>
</head>
<body>
    <h1>つぶやきアプリ</h1>
    <form action="{{ route('post.create')}}" method="post">
        @csrf
        <label for="post-content">つぶやき</label>
        <span>140文字まで</span>
        <textarea id="post-content" type="text" name="post" placeholder="つぶやきを入力"></textarea>
        @error('post')
            <p style="color: red;">{{ $message }}</p>
        @enderror
        <button type="submit">投稿</button>
    </form>
</body>
</html>
