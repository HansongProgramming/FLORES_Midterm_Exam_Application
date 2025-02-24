<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product List</title>
    <style>
        body { font-family: Arial, sans-serif; }
        table { width: 100%; border-collapse: collapse; margin-top: 20px; }
        th, td { border: 1px solid black; padding: 10px; text-align: left; }
        th { background-color: #f2f2f2; }
    </style>
</head>
<body>
    <h2>Movies List</h2>
    <table>
        <thead>
            <tr>
                <th>Title</th>
                <th>Duration in Minutes ($)</th>
                <th>Category</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($movies as $movie)
                <tr>
                    <td>{{ $movie['title'] }}</td>
                    <td>{{ $movie['duration'] }}</td>
                    <td>{{ $movie['category'] }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
