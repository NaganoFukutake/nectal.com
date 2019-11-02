### docker 手順
dockerのコンテナ内に入った時に `/var/www/html/laravel`のような構成にしたかったので`clone`するサイトの上階層に`team_dev`ディレクトリを作成(名前は任意)してその中に`clone`してください。
じゃないとサイトと同階層にある他のディレクトリまで全てマウントされてしまうので。
```:構成見本
├ team_dev
    ├ laravel
        ├ app
        ├ boostrap
        ├ config
        
```
1. laravel直下に`mysql`ディレクトリを作成する
    コンテナが作成される時に`mysql`以下に`data/...`いろいろ出来る...
2. `docker_compose.yml`の`container_name:`は自分で分かりやすい名前に変更してください
3. `docker_compose.yml`がある階層で`docker-compose up -d`
4. `localhost:8080`でアクセスしてwelcomeページが表示出来ればOK

ps. ymlファイルがまだ不完全なので悪しからず。

```:豆知識
    ├ ⇦ ディレクトリ構造でよく見るこの記号、「けいせん」で変換するとでる
```
