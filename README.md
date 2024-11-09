エイリアスで`./vendor/bin/sail`を`sail`に省略しています。

```~/.zshrc
alias sail='[ -f sail ] && bash sail || bash vendor/bin/sail'
```

localhostにアクセスするとジョブがキューにプッシュされます。
http://localhost/

キューワーカー起動（キュー属性はデフォルトの`default`）
```
sail artisan queue:work
```

属性名を指定してキューワーカー起動
```
sail artisan queue:work --queue=queue属性
```
