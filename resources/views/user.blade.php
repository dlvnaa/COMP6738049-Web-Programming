<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.7.2/css/all.min.css" referrerpolicy="no-referrer" />
    <title>Pemanasan Sebelum Ujian - 2440034050</title>
    <style>
        table,
        th,
        td {
          padding: 10px;
          border: 1px solid black;
          border-collapse: collapse;
        }
      </style>
</head>
<body>
    <div class="container">
        <h1 class="text-center p-4">Pemanasan Sebelum Ujian</h1>
        <h4 class="text-center pb-4">Delvina Wongsono - 2440034050</h3>
        <h5 class="text-center pb-4">Eloquent Relationship One-to-One Relationship and One-to-Many Relationship</h3>
        <table>
            <thead>
                <tr>
                    <th style="text-align: center">Idol</th>
                    <th style="text-align: center">Agency</th>
                    <th style="text-align: center">Rating & Review</th>
                </tr>
            </thead>
            <tbody>
                @foreach($users as $u)
                    <tr>
                        <td>{{$u->name}}</td>
                        <td>{{$u->Agency->agency_name}}</td>
                        <td>
                            @foreach($u->agency->rates as $r)
                                <div class="card text-bg-light shadow-sm m-2">
                                    <div class="card-body">
                                        <h3>Rate: {{$r->rating}}</h3>
                                        {{$r->content}}
                                    </div>
                                </div>
                            @endforeach
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>
