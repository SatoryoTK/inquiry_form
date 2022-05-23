<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>お問い合わせ管理</title>
  <style>
  body {
    font-size:16px;
    margin: 5px;
  }
  h1 {
    font-size:60px;
    color:#666;
    letter-spacing:-2px;
    margin-left: 10px;
  }
  .content {
    margin:10px; 
  }
  th {
    background-color: #289ADC;
    color: white;
    padding: 5px 10px;
  }
  tr:nth-child(odd) td{
    background-color: #FFFFFF;
  }
  td {
    padding: 25px 10px;
    background-color: #EEEEEE;
    text-align: center;
  }
  </style>
</head>
<body>
  <h1>お問い合わせ管理</h1>
  <div class="content">
    <form action='/edit' method='post'>
    <table>
      @csrf
      <tr>
        <th>id</th>
        <th>名前</th>
        <th>住所</th>
        <th>お問い合わせ内容</th>
        <th>お問い合わせ日時</th>
        <th>更新日時</th>
        <th>更新</th>
        <th>削除</th>
      </tr>
      @foreach ($items as $item)
      <tr>
        <td>
          {{$item->id}}
        </td>
        <td>
          <input type='text' name='id' value='{{$item->name}}'>
        </td>
        <td>
          <input type='text' name='address' value='{{$item->prefecture}}{{$item->city}}{{$item->address}}'>
        </td>
        <td>
          <input type='text' name='inquiry_content' value='{{$item->inquiry_content}}'>
        </td>
        <td>
          {{$item->created_at}}
        </td>
        <td>
          {{$item->updated_at}}
        </td>
        <td>
          <button class="update_button" type='submit'>更新</button>
        </td>
        <td>
          <button class="delete_button" formaction="/delete" type="submit">削除</button>
        </td>
      </tr>
      @endforeach
    </table>
    </form>
</body>
</html>