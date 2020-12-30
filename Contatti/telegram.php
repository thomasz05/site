$apiToken = "1063198154:AAFlwazz6kWwKCx2VOV4Xz6rLEcMOKV7APU";

$data = [
    'chat_id' => '@thomasz_05',
    'text' => 'Hello world!'
];

$response = file_get_contents("https://api.telegram.org/bot$apiToken/sendMessage?" . http_build_query($data) );
// Do what you want with result
