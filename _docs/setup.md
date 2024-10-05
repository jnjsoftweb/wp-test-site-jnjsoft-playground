## local sites 생성

- `Local` 실행
- '+'(좌측 하단 아이콘) 클릭
- 'Create a Site' / 'Continue' 클릭
- site's name 입력: 'wp-test-site-jnjsoft-playground'
- 'Choose Environment' / 'Continue' 클릭
- WordPress (admin)user 정보 입력
  - WordPress username: 'jnjsoft.web'
  - WordPress password:
  - WordPress e-mail: 'jnjsoft.web@gmail.com'

## folder.file github 설정

### 자동 설정 script 실행

> `/Users/youchan/Local Sites/_app/settings.json`

```json
  "SITE_NAME": "wp-test-site-jnjsoft-playground",
  "SITE_DESCRIPTION": "JNJSOFT wordpress playground",
  "TEMPLATE_TYPE": "basic", // basic, withEnv, withExMysql
  "INIT_TYPE": "push",  // push, copy
```

```sh
cd /Users/youchan/Local Sites/_app
node initWp.js
```

-----

## 참고1 push (folder.file github 설정)

### windows

> folder.file 삭제, 복사

```sh
rmdir /s /q "C:\Users\Jungsam\Local Sites\\wp-test-site-jnjsoft-playground\\app\\public\\wp-content\\themes\\twentytwentythree"
rmdir /s /q "C:\Users\Jungsam\Local Sites\\wp-test-site-jnjsoft-playground\\app\\public\\wp-content\\themes\\twentytwentytwo"

xcopy "C:\Users\Jungsam\Local Sites\\_templates\\basic\\*" "C:\Users\Jungsam\Local Sites\\wp-test-site-jnjsoft-playground\\app\\public\\" /s /e /h /y
```

> file(_docs/*.md) 수정


### macos

> folder.file 삭제, 복사

```sh
rm -rf "/Users/youchan/Local Sites/wp-test-site-jnjsoft-playground/app/public/wp-content/themes/twentytwentythree"
rm -rf "/Users/youchan/Local Sites/wp-test-site-jnjsoft-playground/app/public/wp-content/themes/twentytwentytwo"

cp -R "/Users/youchan/Local Sites/_templates/basic/". "/Users/youchan/Local Sites/wp-test-site-jnjsoft-playground/app/public/"
```

> file(_docs/*.md) 수정


## github

```sh
github -e pushRepo -u jnjsoftweb -n wp-test-site-jnjsoft-playground -d "JNJSOFT wordpress playground"
```


-----

## 참고2 copy (folder.file github 설정)


### windows

> folder.file 삭제

```sh
rmdir /s /q "C:\Users\Jungsam\Local Sites\\wp-test-site-jnjsoft-playground\\app\\public\\wp-content\\themes\\twentytwentythree"
rmdir /s /q "C:\Users\Jungsam\Local Sites\\wp-test-site-jnjsoft-playground\\app\\public\\wp-content\\themes\\twentytwentytwo"
```

### macos

> folder.file 삭제

```sh
rm -rf "/Users/youchan/Local Sites/wp-test-site-jnjsoft-playground/app/public/wp-content/themes/twentytwentythree"
rm -rf "/Users/youchan/Local Sites/wp-test-site-jnjsoft-playground/app/public/wp-content/themes/twentytwentytwo"
```

## github clone

```sh
github -e copyRepo -u jnjsoftweb -n wp-test-site-jnjsoft-playground
```


## move github local repository

### windows

```sh
xcopy "C:\Users\Jungsam\Local Sites\\wp-test-site-jnjsoft-playground\\app\\wp-test-site-jnjsoft-playground\\*" "C:\Users\Jungsam\Local Sites\\wp-test-site-jnjsoft-playground\\app\\public\\" /s /e /h /y
rmdir /s /q "C:\Users\Jungsam\Local Sites\\wp-test-site-jnjsoft-playground\\app\\wp-test-site-jnjsoft-playground"
```

### macos

```sh
cp -R "/Users/youchan/Local Sites/wp-test-site-jnjsoft-playground/app/wp-test-site-jnjsoft-playground/". "/Users/youchan/Local Sites/wp-test-site-jnjsoft-playground/app/public/"
rm -rf "/Users/youchan/Local Sites/wp-test-site-jnjsoft-playground/app/wp-test-site-jnjsoft-playground"
```


