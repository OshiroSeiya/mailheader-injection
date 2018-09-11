メールヘッダ・インジェクションを試す
====

# 起動方法

```
$ docker-compose up -d
```

# 止め方

```
$ docker-compose stop
```

# データごとコンテナを消す方法

```
$ docker-compose down -v
```

# イメージの削除

`Dockerfile`　の `FROM` に指定したイメージも削除したい場合は下記のコマンドの最後に追加してください

```
$ docker image rm mailheader-injection_php sj26/mailcatcher
```

複数回ビルドしたりして生成された `none` イメージをすべて消す場合は下記のようにします(無関係のnoneイメージが消えることがあります)

```
$ docker system prune --force
```

# アクセス先

お問い合わせフォーム
http://localhost

メールの受信確認
http://localhost:1080

# phpのバージョン切り替え方

`Dockerfile` の `FROM php:7.2.9-apache` の値を[dockerhub](https://hub.docker.com/r/library/php/)を参考に変更しサイトを一度止めて再度起動することで切り替えることができます
