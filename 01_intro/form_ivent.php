<!DOCTYPE html>
<html lang="Ja">
<head>
<meta charset="utf-8">
<title>イベント確認</title>
</head>
<body>
    <h1>イベントを登録しました</h1>
    <table>
        <tr>
            <td>イベント日時</td>
            <td><?php echo $_POST['day']; ?></td>
        </tr>
        <tr>
            <td>イベント名</td>
            <td><?php echo $_POST['title']; ?></td>
        </tr>
        <tr>
            <td>イベント詳細</td>
            <td><?php echo $_POST['details']; ?></td>
        </tr>
    </table>
</body>
</html>
