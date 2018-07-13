メールヘッダ・インジェクションを試す
====

# 起動方法

```
$ docker-compose up -d
```

# アクセス先

お問い合わせフォーム
http://localhost

メールの受信確認
http://localhost:1080

# 脆弱性の確認手順

Fromに`aaa%0d%0aCc:%20aaa`など改行コードつけると刺さる
