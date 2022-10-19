# 專案筆記



## Git指令

### 準備上傳之前的步驟
#### 1. 加入整個專案
.是一整個專案，通常都是這樣用。

``` bash
git add .
```

#### 2. 版本的儲存和備註
commit是評論，-m就是messenge，後面加上這個版本做過的更改    
動詞+檔案名 或是 新增某功能。

``` bash
git commit -m "(訊息)"
```

### 上傳步驟

#### 上傳到網路上的main主分支
origin是網路上的，main是分支名，如果沒有加origin就是上傳到本地的檔案，但是系統會報錯。

``` bash
git push origin main
```

### 如果是第一次要下載專案步驟

#### 1. 下載專案

下載網址所述的專案

``` bash
git clone https://github.com/107590028/my_closet.git
```

#### 2. 更新專案

更新網路上的main分支。

``` bash
git pull origin main
```

### 如果要下載別人更新過的專案

#### 2. 更新專案

更新網路上的main分支。

``` bash
git pull origin main
```


--- 

    
## 需要使用的插件

| 插件連結  |功能   |
|---|---|
|[Live Share](https://marketplace.visualstudio.com/items?itemName=MS-vsliveshare.vsliveshare)    |可以邀請別人同時編輯檔案的插件  |
|[Git Graph](https://marketplace.visualstudio.com/items?itemName=mhutchie.git-graph)   |圖形化的Git分支   |
|[GitLens](https://marketplace.visualstudio.com/items?itemName=eamodio.gitlens)   |顯示分支上的詳細修改時間   |


## 推薦的插件

| 插件連結  |功能   |
|---|---|
|[PHP Extension Pack](https://marketplace.visualstudio.com/items?itemName=xdebug.php-pack)   |PHP除錯工具包   |
|[Live Server](https://marketplace.visualstudio.com/items?itemName=ritwickdey.LiveServer)   |即時預覽html或css   |

  
  ---



