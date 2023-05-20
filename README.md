## 手順書

#### git clone でインストール

```
git@github.com:Kobayashi-shayou/laravel9_test.git
```
インスロール後にファイル名を変更してください

#### 下記のコマンドを実行

```
chmod -R 777 storage
chmod -R 777 bootstrap/cache
composer install
```

#### .gitignoreのため、チェックディレクトリがないので再作成する

```
mkdir tools
mkdir tools/php-cs-fixer
composer require --working-dir=tools/php-cs-fixer friendsofphp/php-cs-fixer
```

#### 下記のコマンドで、エラーが出ないことを確認する

**php-cs-fixerコマンド**
```
./tools/php-cs-fixer/vendor/bin/php-cs-fixer fix -v --diff
```

**Larastanコマンド**

```
./vendor/bin/phpstan analyze --memory-limit=2G
```

## 入っているもの

**Larastan**

```
./vendor/bin/phpstan analyze --memory-limit=2G
```

**php-cs-fixerコマンド**
```
./tools/php-cs-fixer/vendor/bin/php-cs-fixer fix -v --diff
````

# Bookings
