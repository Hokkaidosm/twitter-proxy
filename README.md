# twitter-proxy - 非ログイン時でもツイートを見ることができるサイト

例えば

1. https://twitter.com/i/flow/login?redirect_after_login=%2FHokkaidosm → https://twitter-proxy.hokkaidosm.net/i/flow/login?redirect_after_login=%2FHokkaidosm
2. https://twitter.com/Hokkaidosm/status/1675501336455155714 → https://twitter-proxy.hokkaidosm.net/Hokkaidosm/status/1675501336455155714

というように、 **twitter.com** を **twitter-proxy.hokkaidosm.net** に置き換えることによりツイートを見ることができるようにしようというのが目的です。

## 技術的なこと

- タイムライン表示：埋め込みタイムラインを用います
- ツイート表示：ツイートの埋め込みを用います
