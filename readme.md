# データ構造
- message
  - id: primary key
  - text: メッセージ本文
  - university_id: 大学id
- university
  - id: primary key
  - logical_name: 大学名の論理名
  - physical_name: 大学名の物理名
  - logical_region: 大学の地域の論理名
  - physical_region: 大学の地域の物理名
  - logical_prefecture: 大学の都道府県の論理名
  - physical_prefecture: 大学の都道府県の物理名


# API一覧
## Message API
| Method    | URI                                       |説明|
|:--|:--|:--|
| GET/HEAD  | api/messages                              |全メッセージの取得|
| POST      | api/messages                              |メッセージの投稿|
| GET/HEAD  | api/messages/university/{university_id}   |`university_id`が`{university_id}`であるメッセージの取得|
| GET/HEAD  | api/messages/{message}                    |特定のメッセージの取得|
| PUT/PATCH | api/messages/{message}                    |特定のメッセージの編集|
| DELETE    | api/messages/{message}                    |特定のメッセージの削除|

## University API
| Method    | URI                                       |説明|
|:--|:--|:--|
| GET/HEAD  | api/universities                          |全大学の取得|
| POST      | api/universities                          |大学の投稿|
| GET/HEAD  | api/universities/{university}             |特定の大学の取得|
| PUT/PATCH | api/universities/{university}             |特定の大学の編集|
| DELETE    | api/universities/{university}             |特定の大学の削除|
| GET       | api/universities/region/{region}               |`logical_region`が`{region}`である大学の取得|
| GET       | api/universities/prefecture/{prefecture}       |`logical_prefecture`が`{prefecture}`である大学の取得|

## Other API
| Method    | URI                                       |説明|
|:--|:--|:--|
| GET       | api/regions                               |全地域名の取得|
| GET       | api/prefectures                           |全都道府県名の取得|
