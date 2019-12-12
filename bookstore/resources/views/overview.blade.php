<!DOCTYPE html>
<!-- saved from url=(0038)https://vedrang7.wixsite.com/bookstore -->
<html lang="en" class="">

<head>
  

  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=Edge">


  <meta name="generator" content="Wix.com Website Builder">
  <link rel="shortcut icon" href="https://www.wix.com/favicon.ico" type="image/x-icon">
  <link rel="apple-touch-icon" href="https://www.wix.com/favicon.ico" type="image/x-icon">




  <meta http-equiv="X-Wix-Meta-Site-Id" content="2505d95c-9bec-4e60-a7ed-ddf387e74b8d">
  <meta http-equiv="X-Wix-Application-Instance-Id" content="aa748bc2-1f68-4bb3-8fd5-0181ce25b5ee">


  <meta http-equiv="X-Wix-Published-Version" content="45">



  <meta http-equiv="etag" content="cbb5a8f662180a87054bda09837e2933">


  <meta name="format-detection" content="telephone=no">



  <meta name="SKYPE_TOOLBAR" content="SKYPE_TOOLBAR_PARSER_COMPATIBLE">


  <meta id="wixMobileViewport" name="viewport" content="width=980, user-scalable=yes">

  <!-- JQuery -->
  <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

  <!-- Our Scripts -->
  <script type="text/javascript" src="../js/requests.js"></script>

  <script>
      $(function(){
        console.log("Document Ready");

        //Number of items
        getMaterialItems(function(response) {
          total = 0;
          for(var i in response)
          {
            total += response[i]["maxStock"];
          }
          $('#numberItems').text(total);
        });
        
      });
  </script>

  <!-- META DATA -->
  <script type="text/javascript">
    var serviceTopology = {
      "cacheKillerVersion": "1",
      "staticServerUrl": "https://static.parastorage.com/",
      "usersScriptsRoot": "//static.parastorage.com/services/wix-users/2.660.0",
      "biServerUrl": "https://frog.wix.com/",
      "userServerUrl": "https://users.wix.com/",
      "billingServerUrl": "https://premium.wix.com/",
      "mediaRootUrl": "https://static.wixstatic.com/",
      "logServerUrl": "https://frog.wix.com/plebs",
      "monitoringServerUrl": "https://TODO/",
      "usersClientApiUrl": "https://users.wix.com/wix-users",
      "publicStaticBaseUri": "//static.parastorage.com/services/wix-public/1.299.0",
      "basePublicUrl": "https://www.wix.com/",
      "postLoginUrl": "https://www.wix.com/my-account",
      "postSignUpUrl": "https://www.wix.com/new/account",
      "baseDomain": "wix.com",
      "staticMediaUrl": "https://static.wixstatic.com/media",
      "staticAudioUrl": "https://music.wixstatic.com/mp3",
      "staticDocsUrl": "https://docs.wixstatic.com/ugd",
      "emailServer": "https://assets.wix.com/common-services/notification/invoke",
      "blobUrl": "https://static.parastorage.com/wix_blob",
      "htmlEditorUrl": "http://editor.wix.com/html",
      "siteMembersUrl": "https://users.wix.com/wix-sm",
      "scriptsLocationMap": {
        "automation": "https://static.parastorage.com/services/automation/1.23.0",
        "bootstrap": "https://static.parastorage.com/services/bootstrap/2.1229.80",
        "ck-editor": "https://static.parastorage.com/services/ck-editor/1.87.3",
        "core": "https://static.parastorage.com/services/core/2.1229.80",
        "dbsm-editor-app": "https://static.parastorage.com/services/dbsm-editor-app/1.1124.0",
        "dbsm-viewer-app": "https://static.parastorage.com/services/dbsm-viewer-app/1.889.0",
        "ecommerce": "https://static.parastorage.com/services/ecommerce/1.203.0",
        "fallback-viewer-app": "https://static.parastorage.com/services/fallback-viewer-app/1.0.0",
        "js-platform-apps-configuration": "https://static.parastorage.com/services/js-platform-apps-configuration/1.129.0",
        "js-wixcode-sdk": "https://static.parastorage.com/services/js-wixcode-sdk/1.383.0",
        "langs": "https://static.parastorage.com/services/langs/2.577.0",
        "linguist-flags": "https://static.parastorage.com/services/linguist-flags/1.199.0",
        "promote-analytics-adapter": "https://static.parastorage.com/services/promote-analytics-adapter/2.228.0",
        "promote-seo-renderer": "https://static.parastorage.com/services/promote-seo-renderer/1.2.0",
        "santa": "https://static.parastorage.com/services/santa/1.8534.0",
        "santa-langs": "https://static.parastorage.com/services/santa-langs/1.6007.0",
        "santa-resources": "https://static.parastorage.com/services/santa-resources/1.2.0",
        "santa-site-auth-module": "https://static.parastorage.com/services/santa-site-auth-module/1.9.0",
        "semi-native-sdk": "https://static.parastorage.com/services/semi-native-sdk/1.8.0",
        "sitemembers": "https://static.parastorage.com/services/sm-js-sdk/1.31.0",
        "skins": "https://static.parastorage.com/services/skins/2.1229.80",
        "tpa": "https://static.parastorage.com/services/tpa/2.1065.0",
        "web": "https://static.parastorage.com/services/web/2.1229.80",
        "wix-bolt": "https://static.parastorage.com/services/wix-bolt/1.4336.0",
        "wix-code-platform": "https://static.parastorage.com/services/wix-code-platform/1.305.0",
        "wix-code-viewer-app": "https://static.parastorage.com/services/wix-code-viewer-app/1.264.0",
        "wix-music-embed": "https://static.parastorage.com/services/wix-music-embed/1.26.0",
        "wix-ui-santa": "https://static.parastorage.com/services/wix-ui-santa/1.774.0",
        "wixapps": "https://static.parastorage.com/services/wixapps/2.486.0",
        "wixcode-namespaces": "https://static.parastorage.com/services/wixcode-namespaces/1.308.0"
      },
      "developerMode": false,
      "productionMode": true,
      "staticServerFallbackUrl": "https://sslstatic.wix.com/",
      "staticVideoUrl": "https://video.wixstatic.com/",
      "cloudStorageUrl": "https://static.wixstatic.com/",
      "usersDomainUrl": "https://users.wix.com/wix-users",
      "scriptsDomainUrl": "https://static.parastorage.com/",
      "userFilesUrl": "https://static.parastorage.com/",
      "staticHTMLComponentUrl": "https://vedrang7-wixsite-com.filesusr.com/",
      "secured": true,
      "ecommerceCheckoutUrl": "https://www.safer-checkout.com/",
      "premiumServerUrl": "https://premium.wix.com/",
      "digitalGoodsServerUrl": "https://dgs.wixapps.net/",
      "wixCloudBaseDomain": "wix-code.com",
      "mailServiceSuffix": "/_api/common-services/notification/invoke",
      "staticVideoHeadRequestUrl": "https://storage.googleapis.com/video.wixstatic.com",
      "protectedPageResolverUrl": "https://site-pages.wix.com/_api/wix-public-html-info-webapp/resolve_protected_page_urls",
      "mediaUploadServerUrl": "https://files.wix.com/",
      "siteAssetsServerUrl": "https://siteassets.parastorage.com/pages",
      "wixCodePreconnectUrl": "https://c6890613-ab84-450c-881d-045ff291bae7.static.pub.wix-code.com/",
      "staticServerWixDomainUrl": "https://www.wix.com/_partials",
      "adaptiveVideoDomain": "https://files.wix.com/",
      "scriptsVersionsMap": {
        "santa-data-fixer": "1.686.0",
        "santa-site-metadata": "1.500.0",
        "santa-main-r": "1.100.0",
        "ghostable-structure-builder": "1.150.0",
        "viewer-view-mode-json": "1.73.0",
        "stylable-santa-flatten": "1.0.47",
        "remote-widget-structure-builder": "1.93.0"
      },
      "publicStaticsUrl": "//static.parastorage.com/services/wix-public/1.299.0"
    };
    var santaModels = true;
    var isStreaming = true;
    var rendererModel = {
      "metaSiteId": "2505d95c-9bec-4e60-a7ed-ddf387e74b8d",
      "siteInfo": {
        "documentType": "UGC",
        "applicationType": "HtmlWeb",
        "siteId": "aa748bc2-1f68-4bb3-8fd5-0181ce25b5ee",
        "siteTitleSEO": "bookstore"
      },
      "clientSpecMap": {
        "5": {
          "type": "public",
          "applicationId": 5,
          "appDefinitionId": "14b89688-9b25-5214-d1cb-a3fb9683618b",
          "appDefinitionName": "Mobile App-Social Posts",
          "instance": "kHfNYrd5As7DxOLjt_0RmkMEKXVBqtsdTY9lfpMGVTE.eyJpbnN0YW5jZUlkIjoiMTYwYjk0NTEtNGJlYy00YTU5LTlmNDItNzA3NWY3MmY5ZmViIiwiYXBwRGVmSWQiOiIxNGI4OTY4OC05YjI1LTUyMTQtZDFjYi1hM2ZiOTY4MzYxOGIiLCJtZXRhU2l0ZUlkIjoiMjUwNWQ5NWMtOWJlYy00ZTYwLWE3ZWQtZGRmMzg3ZTc0YjhkIiwic2lnbkRhdGUiOiIyMDE5LTEyLTA2VDEzOjI1OjA1LjQwM1oiLCJkZW1vTW9kZSI6ZmFsc2UsIm9yaWdpbkluc3RhbmNlSWQiOiJlZmJlNTA4OS03NzBiLTQ1MDktYjQ5Ni0xOGEyNDA3OGVhOGQiLCJhaWQiOiIxNDUwZjJjMi04MWQ1LTQ3ODQtODFjMi00ODMwN2JkZmI4YWQiLCJiaVRva2VuIjoiMzMwZTRkMGQtZDAwMC0wNDM5LTM4YWYtYWQ4NjcwYzhkNDY2Iiwic2l0ZU93bmVySWQiOiI3MGVkYTg5Ni1hNjU1LTQwM2ItYWQyYS01OWJiMjlmZDY0OTkifQ",
          "instanceId": "160b9451-4bec-4a59-9f42-7075f72f9feb",
          "sectionPublished": true,
          "sectionMobilePublished": false,
          "sectionSeoEnabled": true,
          "widgets": {},
          "appRequirements": {
            "requireSiteMembers": false
          },
          "isWixTPA": true,
          "installedAtDashboard": true,
          "permissions": {
            "revoked": false
          },
          "appFields": {}
        },
        "10": {
          "type": "public",
          "applicationId": 10,
          "appDefinitionId": "14bca956-e09f-f4d6-14d7-466cb3f09103",
          "appDefinitionName": "Wix Cashier",
          "instance": "YNqE8uAAw96k5h6R7Z3Mhwxa4VXb6pxQWnU-sjviNcU.eyJpbnN0YW5jZUlkIjoiMzk0MDIyZWItOWQzMy00ZThmLWExNzEtZDZiMTc1Y2ZmMTI0IiwiYXBwRGVmSWQiOiIxNGJjYTk1Ni1lMDlmLWY0ZDYtMTRkNy00NjZjYjNmMDkxMDMiLCJtZXRhU2l0ZUlkIjoiMjUwNWQ5NWMtOWJlYy00ZTYwLWE3ZWQtZGRmMzg3ZTc0YjhkIiwic2lnbkRhdGUiOiIyMDE5LTEyLTA2VDEzOjI1OjA1LjQwM1oiLCJkZW1vTW9kZSI6ZmFsc2UsIm9yaWdpbkluc3RhbmNlSWQiOiJjOGYzMzJlNy00MjBkLTRlNmItYjM5ZC1hMDU0ODJjZDc5NWUiLCJhaWQiOiIxNDUwZjJjMi04MWQ1LTQ3ODQtODFjMi00ODMwN2JkZmI4YWQiLCJiaVRva2VuIjoiMWM0NWZiYjctMDZkZi0wMGVmLTA2OWMtMGI0MmYyMjhiYWE5Iiwic2l0ZU93bmVySWQiOiI3MGVkYTg5Ni1hNjU1LTQwM2ItYWQyYS01OWJiMjlmZDY0OTkifQ",
          "instanceId": "394022eb-9d33-4e8f-a171-d6b175cff124",
          "sectionPublished": true,
          "sectionMobilePublished": false,
          "sectionSeoEnabled": true,
          "widgets": {},
          "appRequirements": {
            "requireSiteMembers": false
          },
          "isWixTPA": true,
          "installedAtDashboard": true,
          "permissions": {
            "revoked": false
          },
          "appFields": {}
        },
        "14": {
          "type": "public",
          "applicationId": 14,
          "appDefinitionId": "55cd9036-36bb-480b-8ddc-afda3cb2eb8d",
          "appDefinitionName": "PriceQuotes",
          "instance": "Gp1b1wvrWsEomTgZD1Ur2V3yMSdfgL1ZkE3NeGSSdaU.eyJpbnN0YW5jZUlkIjoiYTY5YzQ5MTEtZDg4NC00NDVjLWJmNGYtYWE5N2ViMzg0ZjgxIiwiYXBwRGVmSWQiOiI1NWNkOTAzNi0zNmJiLTQ4MGItOGRkYy1hZmRhM2NiMmViOGQiLCJtZXRhU2l0ZUlkIjoiMjUwNWQ5NWMtOWJlYy00ZTYwLWE3ZWQtZGRmMzg3ZTc0YjhkIiwic2lnbkRhdGUiOiIyMDE5LTEyLTA2VDEzOjI1OjA1LjQwM1oiLCJkZW1vTW9kZSI6ZmFsc2UsIm9yaWdpbkluc3RhbmNlSWQiOiIzMWRiYTViMy1kY2Q5LTRhMmMtODQwZS04NzM0NDRiMjkyZjMiLCJhaWQiOiIxNDUwZjJjMi04MWQ1LTQ3ODQtODFjMi00ODMwN2JkZmI4YWQiLCJiaVRva2VuIjoiODM5OTkwNGQtNDM2OC0wYTNjLTE4YTItNzc2NDZjZGYwNDBjIiwic2l0ZU93bmVySWQiOiI3MGVkYTg5Ni1hNjU1LTQwM2ItYWQyYS01OWJiMjlmZDY0OTkifQ",
          "instanceId": "a69c4911-d884-445c-bf4f-aa97eb384f81",
          "sectionPublished": true,
          "sectionMobilePublished": false,
          "sectionSeoEnabled": true,
          "widgets": {},
          "appRequirements": {
            "requireSiteMembers": false
          },
          "isWixTPA": true,
          "installedAtDashboard": true,
          "permissions": {
            "revoked": false
          },
          "appFields": {}
        },
        "20": {
          "type": "public",
          "applicationId": 20,
          "appDefinitionId": "139ef4fa-c108-8f9a-c7be-d5f492a2c939",
          "appDefinitionName": "Automated Emails",
          "instance": "j__GWfIMcVEOS5iIWG056L5xTxi146D-TX7hJAo1MgM.eyJpbnN0YW5jZUlkIjoiOWJlMGQ1NjEtYTBkMi00MmFlLWI1NTctZjRmZWQ0YWI5ZWU3IiwiYXBwRGVmSWQiOiIxMzllZjRmYS1jMTA4LThmOWEtYzdiZS1kNWY0OTJhMmM5MzkiLCJtZXRhU2l0ZUlkIjoiMjUwNWQ5NWMtOWJlYy00ZTYwLWE3ZWQtZGRmMzg3ZTc0YjhkIiwic2lnbkRhdGUiOiIyMDE5LTEyLTA2VDEzOjI1OjA1LjQwNFoiLCJkZW1vTW9kZSI6ZmFsc2UsIm9yaWdpbkluc3RhbmNlSWQiOiI5MmZkODI5My0zMmI4LTQwNTItOThmYi0zNGE0Nzg1NTE3NzMiLCJhaWQiOiIxNDUwZjJjMi04MWQ1LTQ3ODQtODFjMi00ODMwN2JkZmI4YWQiLCJiaVRva2VuIjoiYmVlNTBjM2QtM2IzZS0wY2NlLTEyYmEtMjkwZDUzNGNkNTZhIiwic2l0ZU93bmVySWQiOiI3MGVkYTg5Ni1hNjU1LTQwM2ItYWQyYS01OWJiMjlmZDY0OTkifQ",
          "instanceId": "9be0d561-a0d2-42ae-b557-f4fed4ab9ee7",
          "sectionPublished": true,
          "sectionMobilePublished": false,
          "sectionSeoEnabled": true,
          "widgets": {},
          "appRequirements": {
            "requireSiteMembers": false
          },
          "isWixTPA": true,
          "installedAtDashboard": true,
          "permissions": {
            "revoked": false
          }
        },
        "6": {
          "type": "public",
          "applicationId": 6,
          "appDefinitionId": "135c3d92-0fea-1f9d-2ba5-2a1dfb04297e",
          "appDefinitionName": "Email Marketing",
          "instance": "eGO17VYuVQtINHzoZRAWFbpDXHuvOVr8OVH9WwMzXmM.eyJpbnN0YW5jZUlkIjoiZjRjZGIzODktNDU1Yy00MjMzLWE2MGUtNTZiNDA2NTExN2U4IiwiYXBwRGVmSWQiOiIxMzVjM2Q5Mi0wZmVhLTFmOWQtMmJhNS0yYTFkZmIwNDI5N2UiLCJtZXRhU2l0ZUlkIjoiMjUwNWQ5NWMtOWJlYy00ZTYwLWE3ZWQtZGRmMzg3ZTc0YjhkIiwic2lnbkRhdGUiOiIyMDE5LTEyLTA2VDEzOjI1OjA1LjQwM1oiLCJkZW1vTW9kZSI6ZmFsc2UsIm9yaWdpbkluc3RhbmNlSWQiOiIxZWE2MDA3ZS1mNzcyLTQ2OTktYmFkMS04NDI5YWI5MGMwMzkiLCJhaWQiOiIxNDUwZjJjMi04MWQ1LTQ3ODQtODFjMi00ODMwN2JkZmI4YWQiLCJiaVRva2VuIjoiZDFjODZhZDUtZGViMC0wYzUzLTAxZTMtOGI0NzgxYjY1YzY1Iiwic2l0ZU93bmVySWQiOiI3MGVkYTg5Ni1hNjU1LTQwM2ItYWQyYS01OWJiMjlmZDY0OTkifQ",
          "instanceId": "f4cdb389-455c-4233-a60e-56b4065117e8",
          "sectionPublished": true,
          "sectionMobilePublished": false,
          "sectionSeoEnabled": true,
          "widgets": {
            "141995eb-c700-8487-6366-a482f7432e2b": {
              "widgetUrl": "https:\/\/so-feed.codev.wixapps.net\/widget",
              "widgetId": "141995eb-c700-8487-6366-a482f7432e2b",
              "refreshOnWidthChange": true,
              "mobileUrl": "https:\/\/so-feed.codev.wixapps.net\/widget",
              "published": true,
              "mobilePublished": true,
              "seoEnabled": true,
              "preFetch": false,
              "shouldBeStretchedByDefault": false,
              "shouldBeStretchedByDefaultMobile": false,
              "componentFields": {},
              "tpaWidgetId": "shoutout_feed",
              "default": true
            }
          },
          "appRequirements": {
            "requireSiteMembers": false
          },
          "isWixTPA": true,
          "installedAtDashboard": true,
          "permissions": {
            "revoked": false
          },
          "appFields": {
            "premiumBundle": {
              "parentAppId": "ee21fe60-48c5-45e9-95f4-6ca8f9b1c9d9",
              "parentAppSlug": "ee21fe60-48c5-45e9-95f4-6ca8f9b1c9d9"
            }
          }
        },
        "21": {
          "type": "public",
          "applicationId": 21,
          "appDefinitionId": "ea2821fc-7d97-40a9-9f75-772f29178430",
          "appDefinitionName": "Workflows",
          "instance": "HLH58v2kLw8mp2U4ZLaA7RR7lz1BclobxpN15pXPRgY.eyJpbnN0YW5jZUlkIjoiYTY1YjM2NDYtZDA1Ni00MmQ2LTlmMTgtMzIwMWRkZjBiYmJmIiwiYXBwRGVmSWQiOiJlYTI4MjFmYy03ZDk3LTQwYTktOWY3NS03NzJmMjkxNzg0MzAiLCJtZXRhU2l0ZUlkIjoiMjUwNWQ5NWMtOWJlYy00ZTYwLWE3ZWQtZGRmMzg3ZTc0YjhkIiwic2lnbkRhdGUiOiIyMDE5LTEyLTA2VDEzOjI1OjA1LjQwNFoiLCJkZW1vTW9kZSI6ZmFsc2UsIm9yaWdpbkluc3RhbmNlSWQiOiJjY2U4NTA5ZC1lYzE1LTQzNWMtOGU2Ny1iMzRjMGM1NTVlOGIiLCJhaWQiOiIxNDUwZjJjMi04MWQ1LTQ3ODQtODFjMi00ODMwN2JkZmI4YWQiLCJiaVRva2VuIjoiODM1ZWVmMWEtNGJiYS0wY2I2LTM4ZjUtZWZmMjVhMTdmMDMyIiwic2l0ZU93bmVySWQiOiI3MGVkYTg5Ni1hNjU1LTQwM2ItYWQyYS01OWJiMjlmZDY0OTkifQ",
          "instanceId": "a65b3646-d056-42d6-9f18-3201ddf0bbbf",
          "sectionPublished": true,
          "sectionMobilePublished": false,
          "sectionSeoEnabled": true,
          "widgets": {},
          "appRequirements": {
            "requireSiteMembers": false
          },
          "isWixTPA": true,
          "installedAtDashboard": true,
          "permissions": {
            "revoked": false
          },
          "appFields": {}
        },
        "9": {
          "type": "public",
          "applicationId": 9,
          "appDefinitionId": "1367472f-969a-813b-f173-53457bfafd05",
          "appDefinitionName": "Contact Management + CRM",
          "instance": "ga8AhQ1SmMFFAS43jAY7gOzteA8IL546rLHjoTGMIIM.eyJpbnN0YW5jZUlkIjoiOWY4Y2U0OWYtMGMxYS00YjBhLWFhYTItZTY5ZDVhNGZhM2E2IiwiYXBwRGVmSWQiOiIxMzY3NDcyZi05NjlhLTgxM2ItZjE3My01MzQ1N2JmYWZkMDUiLCJzaWduRGF0ZSI6IjIwMTktMTItMDZUMTM6MjU6MDUuNDAzWiIsImRlbW9Nb2RlIjp0cnVlLCJhaWQiOiIxNDUwZjJjMi04MWQ1LTQ3ODQtODFjMi00ODMwN2JkZmI4YWQiLCJzaXRlT3duZXJJZCI6IjcwZWRhODk2LWE2NTUtNDAzYi1hZDJhLTU5YmIyOWZkNjQ5OSJ9",
          "instanceId": "9f8ce49f-0c1a-4b0a-aaa2-e69d5a4fa3a6",
          "sectionPublished": true,
          "sectionMobilePublished": false,
          "sectionSeoEnabled": true,
          "widgets": {},
          "appRequirements": {
            "requireSiteMembers": false
          },
          "isWixTPA": false,
          "installedAtDashboard": true,
          "permissions": {
            "revoked": false
          },
          "appFields": {}
        },
        "13": {
          "type": "sitemembers",
          "applicationId": 13,
          "collectionType": "Open",
          "collectionFormFace": "Register",
          "collectionExposure": "Public",
          "smcollectionId": "08507d81-a0d5-40f6-a362-9c0708fecab0"
        },
        "1434": {
          "type": "public",
          "applicationId": 1434,
          "appDefinitionId": "14271d6f-ba62-d045-549b-ab972ae1f70e",
          "appDefinitionName": "Wix Pro Gallery",
          "instance": "j4xmt5D7lNsgFVnG2ORgI6qPRM3zjDQej8jIg9nUj3M.eyJpbnN0YW5jZUlkIjoiZjBiZGI1NmMtY2ZiNi00ODNhLWE1MWYtNjYzYTRiOTU2ZGZjIiwiYXBwRGVmSWQiOiIxNDI3MWQ2Zi1iYTYyLWQwNDUtNTQ5Yi1hYjk3MmFlMWY3MGUiLCJtZXRhU2l0ZUlkIjoiMjUwNWQ5NWMtOWJlYy00ZTYwLWE3ZWQtZGRmMzg3ZTc0YjhkIiwic2lnbkRhdGUiOiIyMDE5LTEyLTA2VDEzOjI1OjA1LjQwM1oiLCJkZW1vTW9kZSI6ZmFsc2UsIm9yaWdpbkluc3RhbmNlSWQiOiJiNmIzN2JiMi0yMTJhLTRiNmEtOTQyZi05MGU5ZDcyYWQ2NGYiLCJhaWQiOiIxNDUwZjJjMi04MWQ1LTQ3ODQtODFjMi00ODMwN2JkZmI4YWQiLCJiaVRva2VuIjoiZDViODZjMzAtNTQ1YS0wNjVhLTAyZjItYmJjOWNjNzIyNjcxIiwic2l0ZU93bmVySWQiOiI3MGVkYTg5Ni1hNjU1LTQwM2ItYWQyYS01OWJiMjlmZDY0OTkifQ",
          "instanceId": "f0bdb56c-cfb6-483a-a51f-663a4b956dfc",
          "appWorkerUrl": "https:\/\/progallery.wix.com\/worker.html",
          "sectionPublished": true,
          "sectionMobilePublished": false,
          "sectionSeoEnabled": true,
          "widgets": {
            "142bb34d-3439-576a-7118-683e690a1e0d": {
              "widgetUrl": "https:\/\/progallery.wix.com\/gallery.html",
              "widgetId": "142bb34d-3439-576a-7118-683e690a1e0d",
              "refreshOnWidthChange": true,
              "mobileUrl": "https:\/\/progallery.wix.com\/gallery.html",
              "published": true,
              "mobilePublished": true,
              "seoEnabled": true,
              "preFetch": false,
              "shouldBeStretchedByDefault": true,
              "shouldBeStretchedByDefaultMobile": false,
              "componentFields": {
                "useSsrSeo": true,
                "mobileSettingsEnabled": true,
                "componentUrl": "https:\/\/static.parastorage.com\/services\/pro-gallery-santa-wrapper\/1.738.0\/viewer.bundle.min.js"
              },
              "tpaWidgetId": "pro-gallery",
              "default": true
            },
            "14f7938f-fa9a-e9e3-3a24-089172dccb28": {
              "widgetUrl": "https:\/\/progallery.wix.com\/checkout",
              "widgetId": "14f7938f-fa9a-e9e3-3a24-089172dccb28",
              "refreshOnWidthChange": true,
              "mobileUrl": "https:\/\/progallery.wix.com\/checkout",
              "appPage": {
                "id": "checkout_page",
                "name": "Checkout Page",
                "defaultPage": "",
                "hidden": true,
                "multiInstanceEnabled": false,
                "order": 2,
                "indexable": true,
                "fullPage": true,
                "landingPageInMobile": true,
                "hideFromMenu": true
              },
              "published": true,
              "mobilePublished": true,
              "seoEnabled": false,
              "preFetch": true,
              "shouldBeStretchedByDefault": true,
              "shouldBeStretchedByDefaultMobile": false,
              "componentFields": {},
              "default": false
            },
            "1491fc25-fcd2-9c08-c74f-67b98b69ac4a": {
              "widgetUrl": "https:\/\/progallery.wix.com\/multishare.html",
              "widgetId": "1491fc25-fcd2-9c08-c74f-67b98b69ac4a",
              "refreshOnWidthChange": true,
              "mobileUrl": "https:\/\/progallery.wix.com\/multishare.html",
              "published": true,
              "mobilePublished": true,
              "seoEnabled": true,
              "preFetch": false,
              "shouldBeStretchedByDefault": false,
              "shouldBeStretchedByDefaultMobile": true,
              "componentFields": {},
              "tpaWidgetId": "multishare_widget",
              "default": false
            },
            "14f793c4-68e4-1d4f-3a24-089172dccb28": {
              "widgetUrl": "https:\/\/progallery.wix.com\/thankyou",
              "widgetId": "14f793c4-68e4-1d4f-3a24-089172dccb28",
              "refreshOnWidthChange": true,
              "mobileUrl": "https:\/\/progallery.wix.com\/thankyou",
              "appPage": {
                "id": "thank_you_page",
                "name": "Thank you Page",
                "defaultPage": "",
                "hidden": true,
                "multiInstanceEnabled": false,
                "order": 3,
                "indexable": true,
                "fullPage": false,
                "landingPageInMobile": false,
                "hideFromMenu": true
              },
              "published": true,
              "mobilePublished": true,
              "seoEnabled": false,
              "preFetch": false,
              "shouldBeStretchedByDefault": true,
              "shouldBeStretchedByDefaultMobile": false,
              "componentFields": {},
              "default": false
            },
            "14f79354-c828-13e0-1246-058b79e70c1a": {
              "widgetUrl": "https:\/\/progallery.wix.com\/cart.html",
              "widgetId": "14f79354-c828-13e0-1246-058b79e70c1a",
              "refreshOnWidthChange": true,
              "mobileUrl": "https:\/\/progallery.wix.com\/cart.html",
              "published": true,
              "mobilePublished": true,
              "seoEnabled": false,
              "preFetch": false,
              "shouldBeStretchedByDefault": false,
              "shouldBeStretchedByDefaultMobile": false,
              "componentFields": {},
              "tpaWidgetId": "cart",
              "default": false
            },
            "144f04b9-aab4-fde7-179b-780c11da4f46": {
              "widgetUrl": "https:\/\/progallery.wix.com\/fullscreen",
              "widgetId": "144f04b9-aab4-fde7-179b-780c11da4f46",
              "refreshOnWidthChange": true,
              "mobileUrl": "https:\/\/progallery.wix.com\/fullscreen",
              "appPage": {
                "id": "fullscreen_page",
                "name": "Fullscreen Page",
                "defaultPage": "",
                "hidden": true,
                "multiInstanceEnabled": false,
                "order": 1,
                "indexable": true,
                "fullPage": true,
                "landingPageInMobile": false,
                "hideFromMenu": true
              },
              "published": true,
              "mobilePublished": true,
              "seoEnabled": true,
              "preFetch": false,
              "shouldBeStretchedByDefault": true,
              "shouldBeStretchedByDefaultMobile": false,
              "componentFields": {
                "useSsrSeo": true
              },
              "default": false
            }
          },
          "appRequirements": {
            "requireSiteMembers": false
          },
          "isWixTPA": true,
          "installedAtDashboard": false,
          "permissions": {
            "revoked": true
          },
          "appFields": {
            "platform": {
              "baseUrls": {
                "santaWrapperBaseUrl": "https:\/\/static.parastorage.com\/services\/pro-gallery-santa-wrapper\/1.738.0\/"
              },
              "viewerScriptUrl": "https:\/\/static.parastorage.com\/services\/pro-gallery-santa-wrapper\/1.738.0\/viewerScript.bundle.min.js"
            }
          }
        },
        "2677": {
          "type": "public",
          "applicationId": 2677,
          "appDefinitionId": "147ab90e-91c5-21b2-d6ca-444c28c8a23b",
          "appDefinitionName": "Wix Art Store",
          "instance": "LRYdrZB-7QDA8BK3h_tndg0tV0E4E-VooIqu11ExhT8.eyJpbnN0YW5jZUlkIjoiNTVjMzIwMjgtNzllOS00ZDA1LWI3N2UtYmRkOWIzNzMwN2I0IiwiYXBwRGVmSWQiOiIxNDdhYjkwZS05MWM1LTIxYjItZDZjYS00NDRjMjhjOGEyM2IiLCJtZXRhU2l0ZUlkIjoiMjUwNWQ5NWMtOWJlYy00ZTYwLWE3ZWQtZGRmMzg3ZTc0YjhkIiwic2lnbkRhdGUiOiIyMDE5LTEyLTA2VDEzOjI1OjA1LjQwM1oiLCJkZW1vTW9kZSI6ZmFsc2UsIm9yaWdpbkluc3RhbmNlSWQiOiJhODg3ODQ4OS0wYjQ3LTQzNjctYjBlNC1kNjAwYTliOTc3MDUiLCJhaWQiOiIxNDUwZjJjMi04MWQ1LTQ3ODQtODFjMi00ODMwN2JkZmI4YWQiLCJiaVRva2VuIjoiNzBjNmY5NzQtZTIwNS0wMzY1LTEwOTMtNjAyYTM0OTQ0YzM5Iiwic2l0ZU93bmVySWQiOiI3MGVkYTg5Ni1hNjU1LTQwM2ItYWQyYS01OWJiMjlmZDY0OTkifQ",
          "instanceId": "55c32028-79e9-4d05-b77e-bdd9b37307b4",
          "appWorkerUrl": "https:\/\/progallery.wix.com\/worker.html?isStore=true",
          "sectionPublished": true,
          "sectionMobilePublished": false,
          "sectionSeoEnabled": true,
          "widgets": {
            "1482a5fd-aaf4-0660-4c80-178d7d8a28f3": {
              "widgetUrl": "https:\/\/progallery.wix.com\/cart.html?isStore=true",
              "widgetId": "1482a5fd-aaf4-0660-4c80-178d7d8a28f3",
              "refreshOnWidthChange": true,
              "mobileUrl": "https:\/\/progallery.wix.com\/cart.html?isStore=true",
              "published": true,
              "mobilePublished": false,
              "seoEnabled": true,
              "preFetch": false,
              "shouldBeStretchedByDefault": false,
              "shouldBeStretchedByDefaultMobile": false,
              "componentFields": {},
              "tpaWidgetId": "cart",
              "default": false
            },
            "147ab9e6-2166-63ea-f9f1-3e81db0cbb4a": {
              "widgetUrl": "https:\/\/progallery.wix.com\/gallery.html?isStore=true",
              "widgetId": "147ab9e6-2166-63ea-f9f1-3e81db0cbb4a",
              "refreshOnWidthChange": true,
              "mobileUrl": "https:\/\/progallery.wix.com\/gallery.html?isStore=true",
              "published": true,
              "mobilePublished": false,
              "seoEnabled": true,
              "preFetch": false,
              "shouldBeStretchedByDefault": true,
              "shouldBeStretchedByDefaultMobile": false,
              "componentFields": {
                "componentUrl": "https:\/\/static.parastorage.com\/services\/pro-gallery-santa-wrapper\/1.735.0\/artStoreViewer.bundle.js"
              },
              "tpaWidgetId": "wix_pro_gallery_store",
              "default": true
            },
            "14ab724d-1a44-73f3-daaf-e6590508eb14": {
              "widgetUrl": "https:\/\/progallery.wix.com\/thankyou?isStore=true",
              "widgetId": "14ab724d-1a44-73f3-daaf-e6590508eb14",
              "refreshOnWidthChange": true,
              "mobileUrl": "https:\/\/progallery.wix.com\/thankyou?isStore=true",
              "appPage": {
                "id": "thank_you_page",
                "name": "Thank you Page",
                "defaultPage": "",
                "hidden": true,
                "multiInstanceEnabled": false,
                "order": 2,
                "indexable": true,
                "fullPage": false,
                "landingPageInMobile": false,
                "hideFromMenu": true
              },
              "published": true,
              "mobilePublished": true,
              "seoEnabled": false,
              "preFetch": false,
              "shouldBeStretchedByDefault": true,
              "shouldBeStretchedByDefaultMobile": false,
              "componentFields": {},
              "default": false
            },
            "14ab7270-f407-6af2-daaf-e6590508eb14": {
              "widgetUrl": "https:\/\/progallery.wix.com\/fullscreen?isStore=true",
              "widgetId": "14ab7270-f407-6af2-daaf-e6590508eb14",
              "refreshOnWidthChange": true,
              "mobileUrl": "https:\/\/progallery.wix.com\/fullscreen?isStore=true",
              "appPage": {
                "id": "fullscreen_store_page",
                "name": "Fullscreen store Page",
                "defaultPage": "",
                "hidden": true,
                "multiInstanceEnabled": false,
                "order": 3,
                "indexable": true,
                "fullPage": true,
                "landingPageInMobile": false,
                "hideFromMenu": true
              },
              "published": true,
              "mobilePublished": true,
              "seoEnabled": true,
              "preFetch": true,
              "shouldBeStretchedByDefault": true,
              "shouldBeStretchedByDefaultMobile": false,
              "componentFields": {},
              "default": false
            },
            "14ab720e-ed14-76e4-daaf-e6590508eb14": {
              "widgetUrl": "https:\/\/progallery.wix.com\/checkout?isStore=true",
              "widgetId": "14ab720e-ed14-76e4-daaf-e6590508eb14",
              "refreshOnWidthChange": true,
              "mobileUrl": "https:\/\/progallery.wix.com\/checkout?isStore=true",
              "appPage": {
                "id": "checkout_page",
                "name": "Checkout Page",
                "defaultPage": "",
                "hidden": true,
                "multiInstanceEnabled": false,
                "order": 1,
                "indexable": true,
                "fullPage": true,
                "landingPageInMobile": true,
                "hideFromMenu": true
              },
              "published": true,
              "mobilePublished": true,
              "seoEnabled": false,
              "preFetch": true,
              "shouldBeStretchedByDefault": true,
              "shouldBeStretchedByDefaultMobile": false,
              "componentFields": {},
              "default": false
            }
          },
          "appRequirements": {
            "requireSiteMembers": false
          },
          "isWixTPA": true,
          "installedAtDashboard": false,
          "permissions": {
            "revoked": true
          },
          "appFields": {
            "platform": {
              "baseUrls": {
                "staticsBaseUrl": "https:\/\/static.parastorage.com\/services\/pro-gallery-santa-wrapper\/1.735.0\/"
              },
              "viewerScriptUrl": "https:\/\/static.parastorage.com\/services\/pro-gallery-santa-wrapper\/1.735.0\/artStoreViewerScript.bundle.js"
            }
          }
        },
        "22": {
          "type": "public",
          "applicationId": 22,
          "appDefinitionId": "13aa9735-aa50-4bdb-877c-0bb46804bd71",
          "appDefinitionName": "Promote SEO Patterns",
          "instance": "0imGExSYfKu-OO7HD46jPRLLHYc7Ewbj18T76WL86cc.eyJpbnN0YW5jZUlkIjoiMWJiYjY1ZmItZGFiYi00YWQ0LWI4MzAtNGUwYzYyYzgzZGU3IiwiYXBwRGVmSWQiOiIxM2FhOTczNS1hYTUwLTRiZGItODc3Yy0wYmI0NjgwNGJkNzEiLCJtZXRhU2l0ZUlkIjoiMjUwNWQ5NWMtOWJlYy00ZTYwLWE3ZWQtZGRmMzg3ZTc0YjhkIiwic2lnbkRhdGUiOiIyMDE5LTEyLTA2VDEzOjI1OjA1LjQwNFoiLCJkZW1vTW9kZSI6ZmFsc2UsImFpZCI6IjE0NTBmMmMyLTgxZDUtNDc4NC04MWMyLTQ4MzA3YmRmYjhhZCIsImJpVG9rZW4iOiIzZWJlYmNhNy00MTU3LTA0YjQtMWZkZC05M2ZmZTUyZjc2NmEiLCJzaXRlT3duZXJJZCI6IjcwZWRhODk2LWE2NTUtNDAzYi1hZDJhLTU5YmIyOWZkNjQ5OSJ9",
          "instanceId": "1bbb65fb-dabb-4ad4-b830-4e0c62c83de7",
          "sectionPublished": true,
          "sectionMobilePublished": false,
          "sectionSeoEnabled": true,
          "widgets": {},
          "appRequirements": {
            "requireSiteMembers": false
          },
          "isWixTPA": true,
          "installedAtDashboard": true,
          "permissions": {
            "revoked": false
          },
          "appFields": {}
        },
        "12": {
          "type": "public",
          "applicationId": 12,
          "appDefinitionId": "150ae7ee-c74a-eecd-d3d7-2112895b988a",
          "appDefinitionName": "Marketing Integration",
          "instance": "fny9RYYwF6GE21W9QZDGSkGqMQm9IGEhiL1XK4FiEL0.eyJpbnN0YW5jZUlkIjoiZTZjMDEwYTItNGRmMi00ZjNjLWI2YWItOGEzN2ZiYzNkNmJkIiwiYXBwRGVmSWQiOiIxNTBhZTdlZS1jNzRhLWVlY2QtZDNkNy0yMTEyODk1Yjk4OGEiLCJtZXRhU2l0ZUlkIjoiMjUwNWQ5NWMtOWJlYy00ZTYwLWE3ZWQtZGRmMzg3ZTc0YjhkIiwic2lnbkRhdGUiOiIyMDE5LTEyLTA2VDEzOjI1OjA1LjQwM1oiLCJkZW1vTW9kZSI6ZmFsc2UsIm9yaWdpbkluc3RhbmNlSWQiOiIzOThlZjg4YS1jNTkxLTQ3ZTMtOTRmYS0xZmRiZjQyZjQ5MzEiLCJhaWQiOiIxNDUwZjJjMi04MWQ1LTQ3ODQtODFjMi00ODMwN2JkZmI4YWQiLCJiaVRva2VuIjoiYzNjNWM5ZmUtZDYxZS0wMTVjLTExNDYtNTdjNDdjMjQ5ZDMwIiwic2l0ZU93bmVySWQiOiI3MGVkYTg5Ni1hNjU1LTQwM2ItYWQyYS01OWJiMjlmZDY0OTkifQ",
          "instanceId": "e6c010a2-4df2-4f3c-b6ab-8a37fbc3d6bd",
          "sectionPublished": true,
          "sectionMobilePublished": false,
          "sectionSeoEnabled": true,
          "widgets": {},
          "appRequirements": {
            "requireSiteMembers": false
          },
          "isWixTPA": true,
          "installedAtDashboard": true,
          "permissions": {
            "revoked": false
          },
          "appFields": {}
        },
        "7": {
          "type": "public",
          "applicationId": 7,
          "appDefinitionId": "146c0d71-352e-4464-9a03-2e868aabe7b9",
          "appDefinitionName": "Ascend Tasks",
          "instance": "IcmZy180E89Cd1icUEQyn2TaihNKBYWLOi8wFBhDSPk.eyJpbnN0YW5jZUlkIjoiYTJjNDU4MTMtOTkyYS00MTNjLWI3NjktOGY1NGJjZDVhZjY5IiwiYXBwRGVmSWQiOiIxNDZjMGQ3MS0zNTJlLTQ0NjQtOWEwMy0yZTg2OGFhYmU3YjkiLCJtZXRhU2l0ZUlkIjoiMjUwNWQ5NWMtOWJlYy00ZTYwLWE3ZWQtZGRmMzg3ZTc0YjhkIiwic2lnbkRhdGUiOiIyMDE5LTEyLTA2VDEzOjI1OjA1LjQwM1oiLCJkZW1vTW9kZSI6ZmFsc2UsIm9yaWdpbkluc3RhbmNlSWQiOiJmY2E4OTg2OS0wYWY5LTRhM2ItOTk1MS00NjE4MTNmMGM0NjciLCJhaWQiOiIxNDUwZjJjMi04MWQ1LTQ3ODQtODFjMi00ODMwN2JkZmI4YWQiLCJiaVRva2VuIjoiODdjMTgxNGYtMDJjNi0wZjVjLTEwODQtNTJhNzNiMzJlNGU0Iiwic2l0ZU93bmVySWQiOiI3MGVkYTg5Ni1hNjU1LTQwM2ItYWQyYS01OWJiMjlmZDY0OTkifQ",
          "instanceId": "a2c45813-992a-413c-b769-8f54bcd5af69",
          "sectionPublished": true,
          "sectionMobilePublished": false,
          "sectionSeoEnabled": true,
          "widgets": {},
          "appRequirements": {
            "requireSiteMembers": false
          },
          "isWixTPA": true,
          "installedAtDashboard": true,
          "permissions": {
            "revoked": false
          },
          "appFields": {}
        },
        "-666": {
          "type": "metasite",
          "metaSiteId": "2505d95c-9bec-4e60-a7ed-ddf387e74b8d",
          "appDefId": "22bef345-3c5b-4c18-b782-74d4085112ff",
          "instance": "KjXqR8vTRkvxJ0IW_c6qryfQMcBgc5w29asAsQqryco.eyJpbnN0YW5jZUlkIjoiMjUwNWQ5NWMtOWJlYy00ZTYwLWE3ZWQtZGRmMzg3ZTc0YjhkIiwiYXBwRGVmSWQiOiIyMmJlZjM0NS0zYzViLTRjMTgtYjc4Mi03NGQ0MDg1MTEyZmYiLCJtZXRhU2l0ZUlkIjoiMjUwNWQ5NWMtOWJlYy00ZTYwLWE3ZWQtZGRmMzg3ZTc0YjhkIiwic2lnbkRhdGUiOiIyMDE5LTEyLTA2VDEzOjI1OjA1LjQwNFoiLCJkZW1vTW9kZSI6ZmFsc2UsImFpZCI6IjE0NTBmMmMyLTgxZDUtNDc4NC04MWMyLTQ4MzA3YmRmYjhhZCIsInNpdGVPd25lcklkIjoiNzBlZGE4OTYtYTY1NS00MDNiLWFkMmEtNTliYjI5ZmQ2NDk5In0",
          "appDefinitionId": "22bef345-3c5b-4c18-b782-74d4085112ff",
          "applicationId": -666
        },
        "3455": {
          "type": "siteextension",
          "applicationId": 3455,
          "appDefinitionId": "675bbcef-18d8-41f5-800e-131ec9e08762",
          "instance": "wixcode-pub.88d48b1c7f5d56714cd8dc887a0bb77f46aab4b6.eyJpbnN0YW5jZUlkIjoiYzY4OTA2MTMtYWI4NC00NTBjLTg4MWQtMDQ1ZmYyOTFiYWU3IiwiaHRtbFNpdGVJZCI6ImFhNzQ4YmMyLTFmNjgtNGJiMy04ZmQ1LTAxODFjZTI1YjVlZSIsInVpZCI6bnVsbCwicGVybWlzc2lvbnMiOm51bGwsImlzVGVtcGxhdGUiOmZhbHNlLCJzaWduRGF0ZSI6MTU3NTYzODcwNTQwMywiYWlkIjoiMTQ1MGYyYzItODFkNS00Nzg0LTgxYzItNDgzMDdiZGZiOGFkIiwiYXBwRGVmSWQiOiJDbG91ZFNpdGVFeHRlbnNpb24iLCJpc0FkbWluIjpmYWxzZSwibWV0YVNpdGVJZCI6IjI1MDVkOTVjLTliZWMtNGU2MC1hN2VkLWRkZjM4N2U3NGI4ZCIsImNhY2hlIjpudWxsLCJleHBpcmF0aW9uRGF0ZSI6bnVsbCwicHJlbWl1bUFzc2V0cyI6bnVsbCwidGVuYW50IjpudWxsLCJzaXRlT3duZXJJZCI6IjcwZWRhODk2LWE2NTUtNDAzYi1hZDJhLTU5YmIyOWZkNjQ5OSIsImluc3RhbmNlVHlwZSI6InB1YiJ9",
          "instanceId": "c6890613-ab84-450c-881d-045ff291bae7"
        },
        "18": {
          "type": "public",
          "applicationId": 18,
          "appDefinitionId": "1480c568-5cbd-9392-5604-1148f5faffa0",
          "appDefinitionName": "Get Found on Google",
          "instance": "by_JFAYjXOivu72UffrE0f0jjAwN25gRfTrPhVK057A.eyJpbnN0YW5jZUlkIjoiMjE1OTA0ZjUtNmY2YS00N2NiLTlkZGItOTc2Y2MwMjMzMWU5IiwiYXBwRGVmSWQiOiIxNDgwYzU2OC01Y2JkLTkzOTItNTYwNC0xMTQ4ZjVmYWZmYTAiLCJtZXRhU2l0ZUlkIjoiMjUwNWQ5NWMtOWJlYy00ZTYwLWE3ZWQtZGRmMzg3ZTc0YjhkIiwic2lnbkRhdGUiOiIyMDE5LTEyLTA2VDEzOjI1OjA1LjQwNFoiLCJkZW1vTW9kZSI6ZmFsc2UsIm9yaWdpbkluc3RhbmNlSWQiOiJmYjhlZThlOS05YTU4LTQwMmUtOGMwZC02NjMwMmY3NmIwNTUiLCJhaWQiOiIxNDUwZjJjMi04MWQ1LTQ3ODQtODFjMi00ODMwN2JkZmI4YWQiLCJiaVRva2VuIjoiMDQ1Y2RkYTktZjQ4Ni0wOWFiLTNhMzYtNGE5ZjQ3YzQ3YTY0Iiwic2l0ZU93bmVySWQiOiI3MGVkYTg5Ni1hNjU1LTQwM2ItYWQyYS01OWJiMjlmZDY0OTkifQ",
          "instanceId": "215904f5-6f6a-47cb-9ddb-976cc02331e9",
          "sectionPublished": true,
          "sectionMobilePublished": false,
          "sectionSeoEnabled": true,
          "widgets": {},
          "appRequirements": {
            "requireSiteMembers": false
          },
          "isWixTPA": true,
          "installedAtDashboard": true,
          "permissions": {
            "revoked": false
          },
          "appFields": {}
        },
        "16": {
          "type": "public",
          "applicationId": 16,
          "appDefinitionId": "9bead16f-1c73-4cda-b6c4-28cff46988db",
          "appDefinitionName": "Facebook Ads",
          "instance": "ZJCwrtM97yKV3TbmrFwB1FM-0pZvg-rHK4-NDJ0JKqo.eyJpbnN0YW5jZUlkIjoiMzdjOGU1MjAtNGFjYy00NWY1LTlkNGMtNWUzOGVlMDk0MDYzIiwiYXBwRGVmSWQiOiI5YmVhZDE2Zi0xYzczLTRjZGEtYjZjNC0yOGNmZjQ2OTg4ZGIiLCJtZXRhU2l0ZUlkIjoiMjUwNWQ5NWMtOWJlYy00ZTYwLWE3ZWQtZGRmMzg3ZTc0YjhkIiwic2lnbkRhdGUiOiIyMDE5LTEyLTA2VDEzOjI1OjA1LjQwNFoiLCJkZW1vTW9kZSI6ZmFsc2UsIm9yaWdpbkluc3RhbmNlSWQiOiIwODRlMzI4OC02YzcxLTQ0ZjYtOTg4Yy05MGQ5MzQ4ZmZkNTQiLCJhaWQiOiIxNDUwZjJjMi04MWQ1LTQ3ODQtODFjMi00ODMwN2JkZmI4YWQiLCJiaVRva2VuIjoiMTJjZDNjN2MtZDEyMC0wYjk1LTNhYTEtODNjYjY5ZWUwYmVlIiwic2l0ZU93bmVySWQiOiI3MGVkYTg5Ni1hNjU1LTQwM2ItYWQyYS01OWJiMjlmZDY0OTkifQ",
          "instanceId": "37c8e520-4acc-45f5-9d4c-5e38ee094063",
          "sectionPublished": true,
          "sectionMobilePublished": false,
          "sectionSeoEnabled": true,
          "widgets": {},
          "appRequirements": {
            "requireSiteMembers": false
          },
          "isWixTPA": true,
          "installedAtDashboard": true,
          "permissions": {
            "revoked": false
          },
          "appFields": {}
        },
        "11": {
          "type": "public",
          "applicationId": 11,
          "appDefinitionId": "13ee94c1-b635-8505-3391-97919052c16f",
          "appDefinitionName": "Wix Invoices",
          "instance": "zsivZoxAF85khks4SZ6WzFlyXA1YNhgO4GGvuFy_1UU.eyJpbnN0YW5jZUlkIjoiYzIzODc0NTUtOWI5MS00NjA1LTgxNGEtODZjMDBkNjg4ODcyIiwiYXBwRGVmSWQiOiIxM2VlOTRjMS1iNjM1LTg1MDUtMzM5MS05NzkxOTA1MmMxNmYiLCJtZXRhU2l0ZUlkIjoiMjUwNWQ5NWMtOWJlYy00ZTYwLWE3ZWQtZGRmMzg3ZTc0YjhkIiwic2lnbkRhdGUiOiIyMDE5LTEyLTA2VDEzOjI1OjA1LjQwM1oiLCJkZW1vTW9kZSI6ZmFsc2UsIm9yaWdpbkluc3RhbmNlSWQiOiJlYTM2NTc1NC02NzRjLTQ3MGQtYjY0Ny1jMjJlZjA5Y2U0NzIiLCJhaWQiOiIxNDUwZjJjMi04MWQ1LTQ3ODQtODFjMi00ODMwN2JkZmI4YWQiLCJiaVRva2VuIjoiZTczZGFkMDktMDA3ZC0wODY1LTI2YTctNWIzMzhhOGZjM2ZmIiwic2l0ZU93bmVySWQiOiI3MGVkYTg5Ni1hNjU1LTQwM2ItYWQyYS01OWJiMjlmZDY0OTkifQ",
          "instanceId": "c2387455-9b91-4605-814a-86c00d688872",
          "sectionPublished": true,
          "sectionMobilePublished": false,
          "sectionSeoEnabled": true,
          "widgets": {},
          "appRequirements": {
            "requireSiteMembers": false
          },
          "isWixTPA": true,
          "installedAtDashboard": true,
          "permissions": {
            "revoked": false
          },
          "appFields": null
        },
        "23": {
          "type": "public",
          "applicationId": 23,
          "appDefinitionId": "a322993b-2c74-426f-bbb8-444db73d0d1b",
          "appDefinitionName": "One App",
          "instance": "6ZVyzfwuu8m8T6a5HVWD8gKHbkp318XIl9hb5ea7H5g.eyJpbnN0YW5jZUlkIjoiMDc4MWVmMTAtYzNmOS00OTI4LTliMGUtNTRkNjA3ZTk4OGUyIiwiYXBwRGVmSWQiOiJhMzIyOTkzYi0yYzc0LTQyNmYtYmJiOC00NDRkYjczZDBkMWIiLCJtZXRhU2l0ZUlkIjoiMjUwNWQ5NWMtOWJlYy00ZTYwLWE3ZWQtZGRmMzg3ZTc0YjhkIiwic2lnbkRhdGUiOiIyMDE5LTEyLTA2VDEzOjI1OjA1LjQwNFoiLCJkZW1vTW9kZSI6ZmFsc2UsImFpZCI6IjE0NTBmMmMyLTgxZDUtNDc4NC04MWMyLTQ4MzA3YmRmYjhhZCIsImJpVG9rZW4iOiIyMjg0MzY0Yy01ODE1LTA3NDgtM2NlMy04OTI1ODAwZWMzNmYiLCJzaXRlT3duZXJJZCI6IjcwZWRhODk2LWE2NTUtNDAzYi1hZDJhLTU5YmIyOWZkNjQ5OSJ9",
          "instanceId": "0781ef10-c3f9-4928-9b0e-54d607e988e2",
          "sectionPublished": true,
          "sectionMobilePublished": false,
          "sectionSeoEnabled": true,
          "widgets": {},
          "appRequirements": {
            "requireSiteMembers": false
          },
          "isWixTPA": true,
          "installedAtDashboard": true,
          "permissions": {
            "revoked": false
          },
          "appFields": {}
        },
        "3181": {
          "type": "public",
          "applicationId": 3181,
          "appDefinitionId": "14ce1214-b278-a7e4-1373-00cebd1bef7c",
          "appDefinitionName": "Wix Forms",
          "instance": "WpkOYtO6ntKJ-sv7usKVRE4oxIM0EYyOnmwdp_Ch7YQ.eyJpbnN0YW5jZUlkIjoiODFiZWVmM2MtOWY4ZS00MTg5LTk4ZmYtYWZjMzQ5YTVjZWU2IiwiYXBwRGVmSWQiOiIxNGNlMTIxNC1iMjc4LWE3ZTQtMTM3My0wMGNlYmQxYmVmN2MiLCJtZXRhU2l0ZUlkIjoiMjUwNWQ5NWMtOWJlYy00ZTYwLWE3ZWQtZGRmMzg3ZTc0YjhkIiwic2lnbkRhdGUiOiIyMDE5LTEyLTA2VDEzOjI1OjA1LjQwM1oiLCJkZW1vTW9kZSI6ZmFsc2UsIm9yaWdpbkluc3RhbmNlSWQiOiIwMzIyZDY4Zi1mMzIzLTQ3NjctOWNmMS0wZjM5MTVlM2NiYzgiLCJhaWQiOiIxNDUwZjJjMi04MWQ1LTQ3ODQtODFjMi00ODMwN2JkZmI4YWQiLCJiaVRva2VuIjoiYTRiYjM2NjAtMDQ2Mi0wZmU5LTNmMTItNzIzMGNlNDI4NTZiIiwic2l0ZU93bmVySWQiOiI3MGVkYTg5Ni1hNjU1LTQwM2ItYWQyYS01OWJiMjlmZDY0OTkifQ",
          "instanceId": "81beef3c-9f8e-4189-98ff-afc349a5cee6",
          "sectionPublished": true,
          "sectionMobilePublished": false,
          "sectionSeoEnabled": true,
          "widgets": {},
          "appRequirements": {
            "requireSiteMembers": false
          },
          "isWixTPA": true,
          "installedAtDashboard": false,
          "permissions": {
            "revoked": true
          },
          "appFields": {
            "platform": {
              "editorScriptUrl": "https:\/\/static.parastorage.com\/services\/wix-form-builder\/1.1886.0\/editor-app.bundle.min.js",
              "viewerScriptUrl": "https:\/\/static.parastorage.com\/services\/wix-form-builder\/1.1886.0\/viewer-app.bundle.min.js",
              "hasDashboardComponent": true
            },
            "featuresForNewPackagePicker": [{
              "forPackages": [{
                "packageId": "Basic",
                "value": "Unlimited"
              }, {
                "packageId": "Mid_Range",
                "value": "Unlimited"
              }, {
                "packageId": "Pro",
                "value": "Unlimited"
              }]
            }, {
              "forPackages": [{
                "packageId": "Basic",
                "value": "true"
              }, {
                "packageId": "Mid_Range",
                "value": "true"
              }, {
                "packageId": "Pro",
                "value": "true"
              }]
            }, {
              "forPackages": [{
                "packageId": "Basic",
                "value": "100MB Storage"
              }, {
                "packageId": "Mid_Range",
                "value": "1GB Storage"
              }, {
                "packageId": "Pro",
                "value": "10GB Storage"
              }]
            }, {
              "forPackages": [{
                "packageId": "Basic",
                "value": "10 Forms"
              }, {
                "packageId": "Mid_Range",
                "value": "100 Forms"
              }, {
                "packageId": "Pro",
                "value": "Unlimited"
              }]
            }, {
              "forPackages": [{
                "packageId": "Basic",
                "value": "1000 Submissions\/month"
              }, {
                "packageId": "Mid_Range",
                "value": "5000 Submissions\/month"
              }, {
                "packageId": "Pro",
                "value": "Unlimited"
              }]
            }, {
              "forPackages": [{
                "packageId": "Basic",
                "value": "1 User"
              }, {
                "packageId": "Mid_Range",
                "value": "5 Users"
              }, {
                "packageId": "Pro",
                "value": "Unlimited Users"
              }]
            }, {
              "forPackages": [{
                "packageId": "Basic",
                "value": "true"
              }, {
                "packageId": "Mid_Range",
                "value": "true"
              }, {
                "packageId": "Pro",
                "value": "true"
              }]
            }, {
              "forPackages": [{
                "packageId": "Basic",
                "value": "true"
              }, {
                "packageId": "Mid_Range",
                "value": "true"
              }, {
                "packageId": "Pro",
                "value": "true"
              }]
            }, {
              "forPackages": [{
                "packageId": "Basic",
                "value": "true"
              }, {
                "packageId": "Mid_Range",
                "value": "true"
              }, {
                "packageId": "Pro",
                "value": "true"
              }]
            }, {
              "forPackages": [{
                "packageId": "Basic",
                "value": "true"
              }, {
                "packageId": "Mid_Range",
                "value": "true"
              }, {
                "packageId": "Pro",
                "value": "true"
              }]
            }, {
              "forPackages": [{
                "packageId": "Basic",
                "value": "true"
              }, {
                "packageId": "Mid_Range",
                "value": "true"
              }, {
                "packageId": "Pro",
                "value": "true"
              }]
            }, {
              "forPackages": [{
                "packageId": "Basic",
                "value": "true"
              }, {
                "packageId": "Mid_Range",
                "value": "true"
              }, {
                "packageId": "Pro",
                "value": "true"
              }]
            }, {
              "forPackages": [{
                "packageId": "Mid_Range",
                "value": "true"
              }, {
                "packageId": "Pro",
                "value": "true"
              }]
            }],
            "mostPopularPackage": "Mid_Range",
            "premiumBundle": {
              "parentAppId": "ee21fe60-48c5-45e9-95f4-6ca8f9b1c9d9",
              "parentAppSlug": "ee21fe60-48c5-45e9-95f4-6ca8f9b1c9d9"
            }
          }
        },
        "19": {
          "type": "public",
          "applicationId": 19,
          "appDefinitionId": "e3118e0a-b1c1-4e1d-b67d-ddf0cb92309b",
          "appDefinitionName": "Promote VideoMaker Home",
          "instance": "PC-5XsPvL-bk6ByydUnUoPCj9rcAD0uDJfdfXS1lcps.eyJpbnN0YW5jZUlkIjoiNWJiZTgyMjQtMzMxNC00NWIwLTgwMGUtODkxMWY2ZGQzYjBmIiwiYXBwRGVmSWQiOiJlMzExOGUwYS1iMWMxLTRlMWQtYjY3ZC1kZGYwY2I5MjMwOWIiLCJtZXRhU2l0ZUlkIjoiMjUwNWQ5NWMtOWJlYy00ZTYwLWE3ZWQtZGRmMzg3ZTc0YjhkIiwic2lnbkRhdGUiOiIyMDE5LTEyLTA2VDEzOjI1OjA1LjQwNFoiLCJkZW1vTW9kZSI6ZmFsc2UsIm9yaWdpbkluc3RhbmNlSWQiOiI3N2NhYmVkOC02NDk4LTRmNDUtOGEyNC0wOTQyMTdjMjJhZWYiLCJhaWQiOiIxNDUwZjJjMi04MWQ1LTQ3ODQtODFjMi00ODMwN2JkZmI4YWQiLCJiaVRva2VuIjoiN2ViYjViNzgtYThmOC0wYmQwLTI3ZTMtNTRlMjcxM2E3MDgyIiwic2l0ZU93bmVySWQiOiI3MGVkYTg5Ni1hNjU1LTQwM2ItYWQyYS01OWJiMjlmZDY0OTkifQ",
          "instanceId": "5bbe8224-3314-45b0-800e-8911f6dd3b0f",
          "sectionPublished": true,
          "sectionMobilePublished": false,
          "sectionSeoEnabled": true,
          "widgets": {},
          "appRequirements": {
            "requireSiteMembers": false
          },
          "isWixTPA": true,
          "installedAtDashboard": true,
          "permissions": {
            "revoked": false
          },
          "appFields": {}
        },
        "4": {
          "type": "public",
          "applicationId": 4,
          "appDefinitionId": "141fbfae-511e-6817-c9f0-48993a7547d1",
          "appDefinitionName": "Inbox",
          "instance": "lk2rhxotfHYZ3d5SQQjHO6qm1sP0mTj6g4kOgxlWCCY.eyJpbnN0YW5jZUlkIjoiYmRlZGY1ZTItNTVkNi00MDZhLTgwMjItZjM2YmE2NWQyMDk3IiwiYXBwRGVmSWQiOiIxNDFmYmZhZS01MTFlLTY4MTctYzlmMC00ODk5M2E3NTQ3ZDEiLCJtZXRhU2l0ZUlkIjoiMjUwNWQ5NWMtOWJlYy00ZTYwLWE3ZWQtZGRmMzg3ZTc0YjhkIiwic2lnbkRhdGUiOiIyMDE5LTEyLTA2VDEzOjI1OjA1LjQwM1oiLCJkZW1vTW9kZSI6ZmFsc2UsIm9yaWdpbkluc3RhbmNlSWQiOiIwOTA2YTYwMy01MWU2LTQ0ZDAtYWRkYy0zOTBmM2IzNzc2ZTQiLCJhaWQiOiIxNDUwZjJjMi04MWQ1LTQ3ODQtODFjMi00ODMwN2JkZmI4YWQiLCJiaVRva2VuIjoiOThlODJjYmUtY2UzYS0wZTBhLTI3Y2YtMmU5ODIxYmE2YjFhIiwic2l0ZU93bmVySWQiOiI3MGVkYTg5Ni1hNjU1LTQwM2ItYWQyYS01OWJiMjlmZDY0OTkifQ",
          "instanceId": "bdedf5e2-55d6-406a-8022-f36ba65d2097",
          "sectionPublished": true,
          "sectionMobilePublished": false,
          "sectionSeoEnabled": true,
          "widgets": {},
          "appRequirements": {
            "requireSiteMembers": false
          },
          "isWixTPA": true,
          "installedAtDashboard": true,
          "permissions": {
            "revoked": false
          },
          "appFields": null
        },
        "15": {
          "type": "public",
          "applicationId": 15,
          "appDefinitionId": "f123e8f1-4350-4c9b-b269-04adfadda977",
          "appDefinitionName": "Promote Home",
          "instance": "W1SFUS49s75YQdx4ulplH3vpzMNTeGP4pJoNYpcmp8o.eyJpbnN0YW5jZUlkIjoiN2RkYjI3M2MtZjUwZS00YjNkLTk5MjktYjcxODQ4YmM4ODhjIiwiYXBwRGVmSWQiOiJmMTIzZThmMS00MzUwLTRjOWItYjI2OS0wNGFkZmFkZGE5NzciLCJtZXRhU2l0ZUlkIjoiMjUwNWQ5NWMtOWJlYy00ZTYwLWE3ZWQtZGRmMzg3ZTc0YjhkIiwic2lnbkRhdGUiOiIyMDE5LTEyLTA2VDEzOjI1OjA1LjQwM1oiLCJkZW1vTW9kZSI6ZmFsc2UsIm9yaWdpbkluc3RhbmNlSWQiOiI1YTVkMTU1Yi1lOTJjLTQyZWYtYmUyZC0zYWFmNGNmZGM4Y2UiLCJhaWQiOiIxNDUwZjJjMi04MWQ1LTQ3ODQtODFjMi00ODMwN2JkZmI4YWQiLCJiaVRva2VuIjoiNThkZWZlNjAtNmVlMi0wNTVkLTNlYzQtNmFlYmNmNWJjMzAxIiwic2l0ZU93bmVySWQiOiI3MGVkYTg5Ni1hNjU1LTQwM2ItYWQyYS01OWJiMjlmZDY0OTkifQ",
          "instanceId": "7ddb273c-f50e-4b3d-9929-b71848bc888c",
          "sectionPublished": true,
          "sectionMobilePublished": false,
          "sectionSeoEnabled": true,
          "widgets": {},
          "appRequirements": {
            "requireSiteMembers": false
          },
          "isWixTPA": true,
          "installedAtDashboard": true,
          "permissions": {
            "revoked": false
          },
          "appFields": {}
        }
      },
      "premiumFeatures": [],
      "geo": "PRT",
      "languageCode": "en",
      "previewMode": false,
      "userId": "70eda896-a655-403b-ad2a-59bb29fd6499",
      "siteMetaData": {
        "preloader": {
          "uri": "",
          "enabled": false
        },
        "adaptiveMobileOn": true,
        "quickActions": {
          "socialLinks": [],
          "colorScheme": "dark",
          "configuration": {
            "quickActionsMenuEnabled": false,
            "navigationMenuEnabled": true,
            "phoneEnabled": false,
            "emailEnabled": false,
            "addressEnabled": false,
            "socialLinksEnabled": false
          }
        },
        "contactInfo": {
          "companyName": "",
          "phone": "",
          "fax": "",
          "email": "",
          "address": ""
        },
        "renderHints": {
          "containsTPA": false,
          "isMeshReady": true,
          "containsAppPart": false,
          "containsAppPart2": false
        }
      },
      "runningExperiments": {
        "sv_comboboxPlaceholderStyle": "new",
        "ds_saveChangesBeforePublish": "new",
        "sv_includeRavenInPreview": "new",
        "useNewWUSDropdown": "old",
        "useEarlyLinkCheck": "new",
        "moveCustomStyleFromMasterPage": "500",
        "helveticaCssInRenderer": "new",
        "sv_contactFormFinalMigrationEditor": "new",
        "se_lineComponent": "new",
        "sv_earlyCloseWelcome": "new",
        "sv_loginSocialBarSelect": "new",
        "sv_tpaExternalIdPreventRefresh": "new",
        "removeBadlyDuplicatedPages": "new",
        "sv_autoSaveNoMobileMerge": "new",
        "preloadBoltScript": "new",
        "sv_reportIframeStartLoadingInWarmup": "new",
        "sv_ampLinkTag": "new",
        "bv_layout_props": "new",
        "sv_newTPANativeDataFlow": "new",
        "sv_contactFormUseFormBuilderSubmit": "new",
        "sv_wixSiteUrlFallback": "new",
        "sv_ssrNoPagesData": "new",
        "sv_twitterMetaTags": "new",
        "sv_addPropsToHostInNativeComponent": "new",
        "sv_dontDeleteSvSessionCookieOnLogout": "new",
        "enableAddMissingStyleFixer": "new",
        "sv_moveWixCodeToViewerApp": "new",
        "sv_addSiteRevisionToMembersCalls": "new",
        "sv_googleMapsRevamp": "new",
        "bv_use_simplified_static_page_pattern": "new",
        "bv_archiveDocumentFile": "new",
        "se_appBuilderPropertyAsSchema": "new",
        "se_santaMembers": "new",
        "sv_inputElementsLabelMobileHooks": "new",
        "preconnectApps": "new",
        "bv_wixImage": "new",
        "sv_blogSocialCounters": "new",
        "bv_preconnectSiteAssets": "new",
        "sv_meshReadyFallback": "new",
        "sv_useJsonForCloningPageData": "new",
        "sv_meshLayout": "new",
        "ds_tpaTranslateHiddenPagesTitle": "new",
        "sv_loadUserGeneratedAppsAfterBootstrap": "new",
        "sv_ssr_image_src": "new",
        "ssrFontShortcut": "new",
        "sv_rtlDatePicker": "new",
        "sv_tpaStateChangedEvent": "new",
        "sv_multilingualSubDomains": "new",
        "sv_controllerScripts": "new",
        "wixCodeNoIframe": "new",
        "useRegExpForFontsParse": "new",
        "extractPageRefsOnSave": "new",
        "sv_moveRouterDataToRGI": "new",
        "useNewWUSUploadButton": "old",
        "sv_contactFormSendEmailThroughFormBuilder": "old",
        "sv_nativeComponents": "new",
        "bv_test_shtaweem": "new",
        "useFontFaceSet": "new",
        "bv_initialize_host_instance_with_warmup_utils": "old",
        "bv_removeQueryParams": "new",
        "useModernBundle": "new",
        "bv_use_seo_patterns": "new",
        "sv_enableBackgroundVideoOnTablet": "new",
        "sv_tpaAddChatApp": "new",
        "sv_restoreAutosaveWhenMobileFails": "new",
        "bv_wixImagePhaseTwo": "new",
        "se_UseMemberSettingsEndpoint": "old",
        "reportBiErrorWhenAddingCompWithCustomeStyleId": "new",
        "bv_prefetchBoltWorker": "new",
        "sv_pass_booking_initial_instance_before_save": "new",
        "sv_multilingualDatePicker": "new",
        "sv_fasterPagesDataOnLoad": "new",
        "ds_updateAnchorsOnlyOnNavigation": "new",
        "displayWixAdsNewVersion": "new",
        "repeater_anchors_a11y": "new",
        "sv_useBackendGoogleOAuthFlow": "new",
        "sv_bookingsFES": "new",
        "sv_fixMobileTapDelay": "new",
        "sv_patchDataDisablesMobileHintsInit": "new",
        "bv_nativeComponents": "new",
        "oneAppWixAds": "true",
        "specs.wus.UploadButtonFilenameHover": "false",
        "bv_restoreScroll": "new",
        "ADI_MoveCustomStyleFromMasterPage": "new",
        "sv_expireAppsInstances": "new",
        "bv_usePlatformAppMetaData": "new",
        "preloadBoltScriptExtra": "new",
        "bv_wixVideo": "new",
        "sv_reparentMobileSOAP": "new",
        "specs.wus.useNewUploadButton": "false",
        "specs.wus.useNewDropdown": "false",
        "bv_support_ooi_for_seo": "new",
        "sv_meshcors": "new",
        "fontCssInRenderer": "new",
        "sv_contactFormAscendEmail": "new",
        "bv_pageJsonByViewMode": "new",
        "se_autosavePlatform": "new",
        "ds_saveWixCodeBulkUpdate": "new",
        "sv_ssrCache": "new"
      },
      "urlFormatModel": {
        "format": "slash",
        "forbiddenPageUriSEOs": ["app", "apps", "_api", "robots.txt", "sitemap.xml", "feed.xml", "sites"],
        "pageIdToResolvedUriSEO": {}
      },
      "passwordProtectedPages": [],
      "useSandboxInHTMLComp": true,
      "wixCodeModel": {
        "appData": {
          "codeAppId": "579a88ba-26ed-4bf1-b3f7-57673e4d3074"
        },
        "signedAppRenderInfo": "927f57e2412b317b6e8af5d2ab61ae2d55f8a507.eyJncmlkQXBwSWQiOiI1NzlhODhiYS0yNmVkLTRiZjEtYjNmNy01NzY3M2U0ZDMwNzQiLCJodG1sU2l0ZUlkIjoiYWE3NDhiYzItMWY2OC00YmIzLThmZDUtMDE4MWNlMjViNWVlIiwiZGVtb0lkIjpudWxsLCJzaWduRGF0ZSI6MTU3NTYzODcwNTUxNH0="
      },
      "routers": {
        "configMap": {}
      },
      "siteMediaToken": "eyJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJhcHA6MzQ2NjQ5MDcwMDI5NzIwNiIsInN1YiI6InVzZXI6NzBlZGE4OTYtYTY1NS00MDNiLWFkMmEtNTliYjI5ZmQ2NDk5IiwiYXVkIjoidXJuOnNlcnZpY2U6ZmlsZS51cGxvYWQiLCJleHAiOjE1NzYyNDM1MDUsImlhdCI6MTU3NTYzODcwNSwianRpIjoiZG1uZ0t3bzV3aUI0QWQxcEVqOEpLdyJ9.trO0eqWK8UGSeIo0V4809UDzgDTcJc0UVtkxvffMid0",
      "mediaAuthToken": "eyJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJhcHA6MzQ2NjQ5MDcwMDI5NzIwNiIsInN1YiI6InNpdGU6MjUwNWQ5NWMtOWJlYy00ZTYwLWE3ZWQtZGRmMzg3ZTc0YjhkIiwiYXVkIjoidXJuOnNlcnZpY2U6ZmlsZS51cGxvYWQiLCJleHAiOjE1NzU3MjUxMDUsImlhdCI6MTU3NTYzODcwNSwianRpIjoiV3BxcUVjTzdscl9fOTZsV2tBZEYxQSIsImFkZGVkQnkiOiJhbm9ueW1vdXM6MTQ1MGYyYzItODFkNS00Nzg0LTgxYzItNDgzMDdiZGZiOGFkIn0.Xv53K7ka3b9HEFiG7YhB5m37JnP9xuJtVBXP-Ps2fTk",
      "pagesPlatformApplications": {},
      "sitePropertiesInfo": {
        "siteDisplayName": "bookstore",
        "language": "en",
        "categories": {
          "primary": "online-store"
        }
      },
      "seo": false,
      "pageList": {
        "pages": [{
          "pageId": "eyurp",
          "title": "Sales",
          "pageUriSEO": "sales",
          "pageJsonFileName": "70eda8_4b39933a0893853bb10ae7bef85da09d_45.json"
        }, {
          "pageId": "xl20s",
          "title": "Inventory",
          "pageUriSEO": "invertory",
          "pageJsonFileName": "70eda8_de40eb31b869226414579a3029c7787a_45.json"
        }, {
          "pageId": "nlu68",
          "title": "Finances",
          "pageUriSEO": "financy",
          "pageJsonFileName": "70eda8_6c4ab414c2c0f39c94166e6f7c105111_45.json"
        }, {
          "pageId": "dhhnr",
          "title": "Overview",
          "pageUriSEO": "home",
          "pageJsonFileName": "70eda8_4d21a2fec15bc46fbf44636c009d16d7_45.json"
        }, {
          "pageId": "c61cb",
          "title": "Logistics",
          "pageUriSEO": "logistics",
          "pageJsonFileName": "70eda8_d20d85cf57c0f764452cb9434478bed1_45.json"
        }, {
          "pageId": "e34ou",
          "title": "Human resources",
          "pageUriSEO": "human-resources",
          "pageJsonFileName": "70eda8_7bfdbd9aed56d694cf5266a8eece216e_45.json"
        }],
        "mainPageId": "dhhnr",
        "masterPageJsonFileName": "70eda8_b7f2f62b9c7ba6528b41bd921f76d8a4_45.json",
        "topology": [{
          "baseUrl": "https:\/\/static.wixstatic.com\/",
          "parts": "sites\/{filename}.z?v=3"
        }, {
          "baseUrl": "https:\/\/staticorigin.wixstatic.com\/",
          "parts": "sites\/{filename}.z?v=3"
        }, {
          "baseUrl": "https:\/\/fallback.wix.com\/",
          "parts": "wix-html-editor-pages-webapp\/page\/{filename}"
        }],
        "fixedPagePath": {
          "baseUrl": "siteassets.parastorage.com\/pages",
          "parts": "\/fixedData?ck={ck}&experiments={experiments}&isHttps={isHttps}&isUrlMigrated={isUrlMigrated}&metaSiteId={metaSiteId}&pageId={pageId}&quickActionsMenuEnabled={quickActionsMenuEnabled}&siteId=aa748bc2-1f68-4bb3-8fd5-0181ce25b5eev=3&version={version}"
        }
      },
      "landingPageId": "dhhnr"
    };
    var publicModel = {
      "domain": "wixsite.com",
      "externalBaseUrl": "https:\/\/vedrang7.wixsite.com\/bookstore",
      "unicodeExternalBaseUrl": "https:\/\/vedrang7.wixsite.com\/bookstore",
      "timeSincePublish": 337816313,
      "favicon": "",
      "deviceInfo": {
        "deviceType": "Desktop",
        "browserType": "Chrome",
        "browserVersion": 78
      },
      "siteRevision": 45,
      "siteCacheRevision": 1575300892486,
      "sessionInfo": {
        "hs": -1005623802,
        "svSession": "98ea41eba17823d38323f6d004640848eb18fc3d13c6e7e88c8a2314fe0ace06561f2ca8ee4a010e5420b49d018200a81e60994d53964e647acf431e4f798bcd4c3bbe98891daff1103629b757a7cabecb88e01b7ad023e8b284e0c178fd3f67",
        "ctToken": "TC1uT0VKeFZCcExoVy0zc2Uxa3RTNHY0clcxZVdnU3NwLU5iVjRfbENaY3x7InVzZXJBZ2VudCI6Ik1vemlsbGEvNS4wIChXaW5kb3dzIE5UIDEwLjA7IFdpbjY0OyB4NjQpIEFwcGxlV2ViS2l0LzUzNy4zNiAoS0hUTUwsIGxpa2UgR2Vja28pIENocm9tZS83OC4wLjM5MDQuMTA4IFNhZmFyaS81MzcuMzYiLCJ2YWxpZFRocm91Z2giOjE1NzYyNDM1MDU0MDJ9",
        "isAnonymous": false,
        "visitorId": "1450f2c2-81d5-4784-81c2-48307bdfb8ad"
      },
      "metaSiteFlags": [],
      "siteMembersProtectedPages": [],
      "indexable": true,
      "hasBlogAmp": false,
      "renderTime": 1575638705514,
      "siteDisplayName": "bookstore",
      "siteAssets": {
        "cacheVersions": {
          "dataFixer": 0
        }
      },
      "siteMeshReady": true,
      "layoutMechanism": "MESH",
      "requestId": "1575638705.38837221675001630074",
      "newDeviceInfo": {
        "uaString": "Mozilla\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\/537.36 (KHTML, like Gecko) Chrome\/78.0.3904.108 Safari\/537.36",
        "os": {
          "type": "Windows",
          "name": "Windows 10"
        },
        "browser": {
          "type": "Chrome",
          "name": "Chrome 78.0.3904.108",
          "major": 78
        },
        "engine": {
          "type": "WebKit"
        },
        "deviceClass": {
          "type": "Desktop"
        }
      },
      "cssGridSupported": true
    };

    var googleAnalytics = "";
    var ipAnonymization = false;

    var googleRemarketing = "";
    var googleTagManager = "";
    var facebookRemarketing = "";
    var yandexMetrika = "";
  </script>


  <script>
    var wixBiSession = {
      initialTimestamp: Date.now(),
      ssrRequestTimestamp: 1575638705708,
      requestId: publicModel.requestId,
      viewerSessionId: 'xxxxxxxx-xxxx-4xxx-yxxx-xxxxxxxxxxxx'.replace(/[xy]/g, function(c) {
        var r = Math.random() * 16 | 0,
          v = c == 'x' ? r : (r & 0x3 | 0x8);
        return v.toString(16);
      }),
      sessionId: '9bca5fac-0c85-437f-8def-c5396179c419',
      initialRequestTimestamp: performance.timeOrigin ? performance.timeOrigin : Date.now() - performance.now(),
      visitorId: publicModel.sessionInfo.visitorId

        ,
      is_rollout: 0,
      is_platform_loaded: 1,
      suppressbi: false,
      dc: '84',
      renderType: 'bolt',
      siteRevision: '45',
      siteCacheRevision: '1575300892486',
      wixBoltExclusionReason: '',
      wixBoltExclusionReasonMoreInfo: '',
      checkVisibility: (function() {
        var alwaysVisible = document.hidden !== true;

        function checkVisibility() {
          alwaysVisible = alwaysVisible && document.hidden !== true;
          return alwaysVisible;
        }
        document.addEventListener('visibilitychange', checkVisibility, false);
        return checkVisibility;
      })(),
      sendBeacon: function(url) {
        if (!wixBiSession.suppressbi) {

          var sent = false;
          try {
            sent = navigator.sendBeacon(url);
          } catch (e) {}
          if (!sent) {
            (new Image()).src = url;
          }

        }
      },
      sendBeat: (function() {
        var beatUrl = 'https://frog.wix.com/bt?src=29&evid=3' +
          '&v=1.4336.0' +
          '&msid=2505d95c-9bec-4e60-a7ed-ddf387e74b8d' +
          '&isp=0' +
          '&st=2' +
          '&dc=84' +
          '&iss=1' +
          '&url=' + encodeURIComponent(location.href.replace(/^http(s)?:\/\/(www\.)?/, ''));
        var referrer = document.referrer;
        if (referrer) {
          beatUrl += '&ref=' + encodeURIComponent(referrer);
        }
        var match = document.cookie.match(/_wixCIDX=([^;]*)/)
        if (match) {
          beatUrl += '&client_id=' + match[1];
        }
        var prevMark = 'fetchStart';
        return function(et, name, extra, pageNumber) {
          var tts = Math.round(performance.now());
          var ts = et === 1 ? 0 : Date.now() - wixBiSession.initialTimestamp;
          if (name && performance.mark) {
            var mark = name + ' (beat ' + et + ')';
            performance.mark(mark);
            if (performance.measure) {
              performance.measure('\u2B50' + mark, prevMark, mark);
            }
            prevMark = mark;
          }
          extra = extra || '';
          if (extra.indexOf('pn=') === -1) {
            extra += '&pn=' + (pageNumber || '1');
          }
          if (extra.indexOf('sr=') === -1 && screen.width) {
            extra += '&sr=' + screen.width + 'x' + screen.height;
          }
          if (screen.availWidth) {
            extra += '&sar=' + screen.availWidth + 'x' + screen.availHeight;
          }
          if (extra.indexOf('wr=') === -1 && window.innerWidth) {
            extra += '&wr=' + window.innerWidth + 'x' + window.innerHeight;
          }
          if (window.outerWidth) {
            extra += '&wor=' + window.outerWidth + 'x' + window.outerHeight;
          }
          if (extra.indexOf('ita=') === -1) {
            extra += '&ita=' + (wixBiSession.checkVisibility() ? '1' : '0');
          }
          if (wixBiSession.siteRevision || wixBiSession.siteCacheRevision) {
            extra += '&siterev=' + wixBiSession.siteRevision + "-" + wixBiSession.siteCacheRevision;
          }
          if (wixBiSession.hasOwnProperty('isUsingMesh')) {
            extra += '&ism=' + (wixBiSession.isUsingMesh ? '1' : '0');
          }
          wixBiSession.sendBeacon(beatUrl +
            '&et=' + et +
            (name ? '&event_name=' + encodeURIComponent(name) : '') +
            '&ts=' + ts +
            '&tts=' + tts +
            '&vsi=' + wixBiSession.viewerSessionId +
            '&rid=' + wixBiSession.requestId +
            '&viewer_name=' + encodeURIComponent(wixBiSession.renderType) +
            '&is_rollout=' + wixBiSession.is_rollout +
            '&is_platform_loaded=' + wixBiSession.is_platform_loaded +
            (wixBiSession.sessionId ? '&sessionId=' + wixBiSession.sessionId : '') +
            (wixBiSession.visitorId ? '&vid=' + wixBiSession.visitorId : '') +
            (wixBiSession.siteMemberId ? '&mid=' + wixBiSession.siteMemberId : '') +
            '&is_cached=' + wixBiSession.isCached +
            '&caching=' + wixBiSession.caching +
            extra
          );
        };
      })()
    };

    (function() {
      var microPop, caching = 'none';
      var match = document.cookie.match(/ssr-caching="cache,\s*desc=(\w+)(?:,\s*varnish=(\w+))?(?:,\s*dc,\s*desc=(\w+))?(?:"|;|$)/);
      if (!match && window.PerformanceServerTiming) {
        match = [];
        var serverTiming = performance.getEntriesByType('navigation')[0].serverTiming;
        serverTiming.forEach(function(st) {
          switch (st.name) {
            case 'cache':
              match[1] = st.description;
              break;
            case 'varnish':
              match[2] = st.description;
              break;
            case 'dc':
              microPop = st.description;
          }
        });
      }
      if (match && match.length) {
        caching = match[1] + ',' + (match[2] || 'none');
        if (!microPop) {
          microPop = match[3];
        }
      }
      wixBiSession.caching = caching;
      wixBiSession.isCached = caching.indexOf("hit") === 0;
      if (microPop) {
        wixBiSession.microPop = microPop;
      }
    })();

    wixBiSession.sendBeat(1, 'Init');
  </script>
  <script data-dapp-detection="">
    (function() {
      let alreadyInsertedMetaTag = false

      function __insertDappDetected() {
        if (!alreadyInsertedMetaTag) {
          const meta = document.createElement('meta')
          meta.name = 'dapp-detected'
          document.head.appendChild(meta)
          alreadyInsertedMetaTag = true
        }
      }

      if (window.hasOwnProperty('web3')) {
        // Note a closure can't be used for this var because some sites like
        // www.wnyc.org do a second script execution via eval for some reason.
        window.__disableDappDetectionInsertion = true
        // Likely oldWeb3 is undefined and it has a property only because
        // we defined it. Some sites like wnyc.org are evaling all scripts
        // that exist again, so this is protection against multiple calls.
        if (window.web3 === undefined) {
          return
        }
        if (!window.web3.currentProvider ||
          !window.web3.currentProvider.isMetaMask) {
          __insertDappDetected()
        }
      } else {
        var oldWeb3 = window.web3
        Object.defineProperty(window, 'web3', {
          configurable: true,
          set: function(val) {
            if (!window.__disableDappDetectionInsertion)
              __insertDappDetected()
            oldWeb3 = val
          },
          get: function() {
            if (!window.__disableDappDetectionInsertion)
              __insertDappDetected()
            return oldWeb3
          }
        })
      }
    })()
  </script>

  <script type="text/javascript">
    (function(x, e, o, s, n) {
      var a = window.fedops || {};
      a.apps = a.apps || {};
      a.apps[x] = {
        startLoadTime: e && e.now && e.now()
      };
      try {
        a.sessionId = o.getItem("fedops.logger.sessionId")
      } catch (x) {}
      a.sessionId = a.sessionId || wixBiSession.viewerSessionId;
      window.fedops = a;
      var d = "//frog.wix.com/bolt-performance?appName=" + x + "&src=72&evid=21" + '&dc=84' + "&is_rollout=" + wixBiSession.is_rollout + "&is_cached=" + wixBiSession.isCached + "&session_id=" + a.sessionId + "&_=" + s();
      wixBiSession.sendBeacon(d)
    })('bolt-viewer', window.performance, window.localStorage, Math.random, window.navigator);
  </script>







  <!-- DATA -->
  <script type="text/javascript">
    var adData = {};
    var mobileAdData = {};

    var usersDomain = "https://users.wix.com/wix-users";
  </script>











  <script type="text/javascript">
    var santaBase = 'https://static.parastorage.com/services/santa/1.8534.0';
    var boltBase = 'https://static.parastorage.com/services/wix-bolt/1.4336.0';
    var boltVersion = '1.4336.0';
  </script>





  <script>
    var requirejs = {
      onNodeCreated: function(node) {
        var src = node.getAttribute('src');
        var shouldIgnore = ['googletagmanager.com', 'google-analytics.com', 'googleadservices.com', 'doubleclick.net', 'connect.facebook.net'].some(function(domain) {
          return src.indexOf(domain) !== -1;
        });
        if (!shouldIgnore) {
          node.setAttribute('crossorigin', 'anonymous')
        }
      }
    }
  </script>

  <script>
    window.messageBuffer = [];
    window.messageHandler = function(event) {
      messageBuffer.push(event)
    };
    window.addEventListener('message', window.messageHandler, false);
  </script>


  <script id="sentry">
    (function(c, t, u, n, p, l, y, z, v) {
      function e(b) {
        if (!w) {
          w = !0;
          var d = t.getElementsByTagName(u)[0],
            a = t.createElement(u);
          a.src = z;
          a.crossorigin = "anonymous";
          a.addEventListener("load", function() {
            try {
              c[n] = q;
              c[p] = r;
              var a = c[l],
                d = a.init;
              a.init = function(a) {
                for (var b in a) Object.prototype.hasOwnProperty.call(a, b) && (v[b] = a[b]);
                d(v)
              };
              B(b, a)
            } catch (A) {
              console.error(A)
            }
          });
          d.parentNode.insertBefore(a, d)
        }
      }

      function B(b, d) {
        try {
          for (var a = 0; a < b.length; a++)
            if ("function" === typeof b[a]) b[a]();
          var f = m.data,
            g = !1,
            h = !1;
          for (a = 0; a < f.length; a++)
            if (f[a].f) {
              h = !0;
              var e = f[a];
              !1 === g && "init" !== e.f && d.init();
              g = !0;
              d[e.f].apply(d, e.a)
            }! 1 === h && d.init();
          var k = c[n],
            l = c[p];
          for (a = 0; a < f.length; a++) f[a].e && k ? k.apply(c, f[a].e) : f[a].p && l && l.apply(c, [f[a].p])
        } catch (C) {
          console.error(C)
        }
      }
      for (var g = !0, x = !1, k = 0; k < document.scripts.length; k++)
        if (-1 < document.scripts[k].src.indexOf(y)) {
          g = "no" !== document.scripts[k].getAttribute("data-lazy");
          break
        } var w = !1,
        h = [],
        m = function(b) {
          (b.e || b.p || b.f && -1 < b.f.indexOf("capture") || b.f && -1 < b.f.indexOf("showReportDialog")) && g && e(h);
          m.data.push(b)
        };
      m.data = [];
      c[l] = {
        onLoad: function(b) {
          h.push(b);
          g && !x || e(h)
        },
        forceLoad: function() {
          x = !0;
          g && setTimeout(function() {
            e(h)
          })
        }
      };
      "init addBreadcrumb captureMessage captureException captureEvent configureScope withScope showReportDialog".split(" ").forEach(function(b) {
        c[l][b] = function() {
          m({
            f: b,
            a: arguments
          })
        }
      });
      var q = c[n];
      c[n] = function(b, d, a, f, e) {
        m({
          e: [].slice.call(arguments)
        });
        q && q.apply(c, arguments)
      };
      var r = c[p];
      c[p] = function(b) {
        m({
          p: b.reason
        });
        r && r.apply(c, arguments)
      };
      g || setTimeout(function() {
        e(h)
      })
    })(window, document,
      "script", "onerror", "onunhandledrejection", "Sentry", "8b4e078a51d04e0e9efdf470027f0ec1", "https://browser.sentry-cdn.com/4.6.2/bundle.min.js", {
        "dsn": "https://8b4e078a51d04e0e9efdf470027f0ec1@sentry.wixpress.com/3"
      });
  </script>




  <script async="" src="./Overview _ bookstore_files/bolt-custom-elements.min.js.download" crossorigin="anonymous"></script>


  <script async="" data-main="https://static.parastorage.com/services/wix-bolt/1.4336.0/bolt-main/app/main-r.min.js" src="./Overview _ bookstore_files/requirejs.min.js.download"></script>




  <style id="viewerMainStyle">
    a,
    abbr,
    acronym,
    address,
    applet,
    b,
    big,
    blockquote,
    body,
    button,
    caption,
    center,
    cite,
    code,
    dd,
    del,
    dfn,
    div,
    dl,
    dt,
    em,
    fieldset,
    font,
    footer,
    form,
    h1,
    h2,
    h3,
    h4,
    h5,
    h6,
    header,
    html,
    i,
    iframe,
    img,
    ins,
    kbd,
    label,
    legend,
    li,
    nav,
    object,
    ol,
    p,
    pre,
    q,
    s,
    samp,
    section,
    small,
    span,
    strike,
    strong,
    sub,
    sup,
    table,
    tbody,
    td,
    tfoot,
    th,
    thead,
    title,
    tr,
    tt,
    u,
    ul,
    var {
      margin: 0;
      padding: 0;
      border: 0;
      outline: 0;
      vertical-align: baseline;
      background: 0 0
    }

    body {
      font-size: 10px;
      font-family: Arial, Helvetica, sans-serif
    }

    input,
    select,
    textarea {
      font-family: Helvetica, Arial, sans-serif;
      box-sizing: border-box
    }

    ol,
    ul {
      list-style: none
    }

    blockquote,
    q {
      quotes: none
    }

    ins {
      text-decoration: none
    }

    del {
      text-decoration: line-through
    }

    table {
      border-collapse: collapse;
      border-spacing: 0
    }

    a {
      cursor: pointer;
      text-decoration: none
    }

    body,
    html {
      height: 100%
    }

    body {
      overflow-x: auto;
      overflow-y: scroll
    }

    body.overflowHidden {
      overflow: hidden
    }

    .testStyles {
      overflow-y: hidden
    }

    .reset-button {
      background: 0 0;
      border: 0;
      outline: 0;
      color: inherit;
      font: inherit;
      line-height: normal;
      overflow: visible;
      padding: 0;
      -webkit-appearance: none;
      -webkit-user-select: none;
      -moz-user-select: none;
      -ms-user-select: none
    }

    :focus {
      outline: 0
    }

    .wixSiteProperties {
      -webkit-font-smoothing: antialiased;
      -moz-osx-font-smoothing: grayscale
    }

    .SITE_ROOT {
      min-height: 100%;
      position: relative;
      margin: 0 auto
    }

    .POPUPS_ROOT {
      left: 0;
      top: 0;
      width: 100vw;
      height: 100%;
      overflow-x: auto;
      overflow-y: scroll;
      position: fixed;
      z-index: 99999
    }

    .POPUPS_ROOT.mobile {
      z-index: 1005;
      -webkit-overflow-scrolling: touch
    }

    .POPUPS_ROOT.responsive .POPUPS_WRAPPER {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%
    }

    .POPUPS_ROOT:not(.responsive) .POPUPS_WRAPPER {
      position: relative;
      overflow: auto
    }

    .POPUPS_ROOT:not(.responsive) .POPUPS_WRAPPER>div {
      margin: 0 auto
    }

    .auto-generated-link {
      color: inherit
    }

    .warmup .hidden-on-warmup {
      visibility: hidden
    }

    body:not([data-js-loaded]) [data-hide-prejs] {
      visibility: hidden
    }

    html.device-phone body {
      overflow-y: auto
    }

    html.device-mobile-optimized.device-android {
      margin-bottom: 1px
    }

    html.device-mobile-optimized.blockSiteScrolling>body {
      position: fixed;
      width: 100%
    }

    html.device-mobile-optimized.media-zoom-mode>body {
      touch-action: manipulation
    }

    html.device-mobile-optimized.media-zoom-mode>body>#SITE_CONTAINER {
      height: 100%;
      overflow: hidden
    }

    html.device-mobile-optimized.media-zoom-mode>body>#SITE_CONTAINER>.noop {
      height: 100%
    }

    html.device-mobile-optimized.media-zoom-mode>body>#SITE_CONTAINER>.noop>.siteAspectsContainer {
      height: 100%;
      z-index: 1005
    }

    .siteAspectsContainer {
      position: absolute;
      top: 0;
      margin: 0 auto;
      left: 0;
      right: 0
    }

    body.prewarmup #SITE_ROOT {
      overflow-x: hidden;
      overflow-y: hidden
    }

    body.device-mobile-optimized {
      overflow-x: hidden;
      overflow-y: scroll
    }

    body.device-mobile-optimized.qa-mode {
      overflow-y: auto
    }

    body.device-mobile-optimized #SITE_CONTAINER {
      width: 320px;
      overflow-x: visible;
      margin: 0 auto;
      position: relative
    }

    body.device-mobile-optimized>* {
      max-width: 100% !important
    }

    body.device-mobile-optimized .SITE_ROOT {
      overflow-x: hidden;
      overflow-y: hidden
    }

    body.device-mobile-non-optimized #SITE_CONTAINER>:not(.mobile-non-optimized-overflow) .SITE_ROOT {
      overflow-x: hidden;
      overflow-y: auto
    }

    body.device-mobile-non-optimized.fullScreenMode {
      background-color: #5f6360
    }

    body.device-mobile-non-optimized.fullScreenMode #MOBILE_ACTIONS_MENU,
    body.device-mobile-non-optimized.fullScreenMode #SITE_BACKGROUND,
    body.device-mobile-non-optimized.fullScreenMode .SITE_ROOT {
      visibility: hidden
    }

    body.fullScreenMode {
      overflow-x: hidden !important;
      overflow-y: hidden !important
    }

    body.fullScreenMode.device-mobile-optimized #TINY_MENU {
      opacity: 0;
      pointer-events: none
    }

    body.fullScreenMode-scrollable.device-mobile-optimized {
      overflow-x: hidden !important;
      overflow-y: auto !important
    }

    body.fullScreenMode-scrollable.device-mobile-optimized #masterPage,
    body.fullScreenMode-scrollable.device-mobile-optimized .SITE_ROOT {
      overflow-x: hidden !important;
      overflow-y: hidden !important
    }

    body.fullScreenMode-scrollable.device-mobile-optimized #SITE_BACKGROUND,
    body.fullScreenMode-scrollable.device-mobile-optimized #masterPage {
      height: auto !important
    }

    body.fullScreenMode-scrollable.device-mobile-optimized #masterPage.mesh-layout {
      height: 0 !important
    }

    .fullScreenOverlay {
      z-index: 1005;
      position: fixed;
      left: 0;
      top: -60px;
      right: 0;
      bottom: 0;
      display: -webkit-box;
      display: -webkit-flex;
      display: flex;
      -webkit-box-pack: center;
      -webkit-justify-content: center;
      justify-content: center;
      overflow-y: hidden
    }

    .fullScreenOverlay>.fullScreenOverlayContent {
      margin: 0 auto;
      position: absolute;
      right: 0;
      top: 60px;
      left: 0;
      bottom: 0;
      overflow: hidden;
      -webkit-transform: translateZ(0);
      transform: translateZ(0)
    }

    .mobile-actions-menu-wrapper {
      z-index: 1000
    }

    body[contenteditable] {
      overflow-x: auto;
      overflow-y: auto
    }

    .bold {
      font-weight: 700
    }

    .italic {
      font-style: italic
    }

    .underline {
      text-decoration: underline
    }

    .lineThrough {
      text-decoration: line-through
    }

    .singleLineText {
      white-space: nowrap;
      text-overflow: ellipsis
    }

    .alignLeft {
      text-align: left
    }

    .alignCenter {
      text-align: center
    }

    .alignRight {
      text-align: right
    }

    .alignJustify {
      text-align: justify
    }

    ol.font_100,
    ul.font_100 {
      color: #080808;
      font-family: 'Arial, Helvetica, sans-serif', serif;
      font-size: 10px;
      font-style: normal;
      font-variant: normal;
      font-weight: 400;
      margin: 0;
      text-decoration: none;
      line-height: normal;
      letter-spacing: normal
    }

    ol.font_100 li,
    ul.font_100 li {
      margin-bottom: 12px
    }

    letter {
      position: relative;
      display: inline-block
    }

    word {
      display: inline-block;
      white-space: nowrap
    }

    letter.space,
    word.space {
      display: inline
    }

    ol.wix-list-text-align,
    ul.wix-list-text-align {
      list-style-position: inside
    }

    ol.wix-list-text-align h1,
    ol.wix-list-text-align h2,
    ol.wix-list-text-align h3,
    ol.wix-list-text-align h4,
    ol.wix-list-text-align h5,
    ol.wix-list-text-align h6,
    ol.wix-list-text-align p,
    ul.wix-list-text-align h1,
    ul.wix-list-text-align h2,
    ul.wix-list-text-align h3,
    ul.wix-list-text-align h4,
    ul.wix-list-text-align h5,
    ul.wix-list-text-align h6,
    ul.wix-list-text-align p {
      display: inline
    }

    #popoverLayer {
      z-index: 100
    }

    .wixapps-less-spacers-align.ltr {
      text-align: left
    }

    .wixapps-less-spacers-align.center {
      text-align: center
    }

    .wixapps-less-spacers-align.rtl {
      text-align: right
    }

    .wixapps-less-spacers-align>a,
    .wixapps-less-spacers-align>div {
      display: inline-block !important
    }

    .flex_display {
      display: -webkit-box;
      display: -webkit-flex;
      display: flex
    }

    .flex_vbox {
      box-sizing: border-box;
      padding-top: .01em;
      padding-bottom: .01em
    }

    a.wixAppsLink img {
      cursor: pointer
    }

    .singleLine {
      white-space: nowrap;
      display: block;
      overflow: hidden;
      text-overflow: ellipsis;
      word-wrap: normal
    }

    [data-z-counter] {
      z-index: 0
    }

    [data-z-counter="0"] {
      z-index: auto
    }

    .circle-preloader {
      -webkit-animation: semi-rotate 1s 1ms linear infinite;
      animation: semi-rotate 1s 1ms linear infinite;
      height: 30px;
      left: 50%;
      margin-left: -15px;
      margin-top: -15px;
      overflow: hidden;
      position: absolute;
      top: 50%;
      -webkit-transform-origin: 100% 50%;
      transform-origin: 100% 50%;
      width: 15px
    }

    .circle-preloader::before {
      content: '';
      top: 0;
      left: 0;
      right: -100%;
      bottom: 0;
      border: 3px solid currentColor;
      border-color: currentColor transparent transparent currentColor;
      border-radius: 50%;
      position: absolute;
      -webkit-transform: rotate(-45deg);
      transform: rotate(-45deg);
      -webkit-animation: inner-rotate .5s 1ms linear infinite alternate;
      animation: inner-rotate .5s 1ms linear infinite alternate;
      color: #7fccf7
    }

    .circle-preloader::after {
      content: '';
      top: 0;
      left: 0;
      right: -100%;
      bottom: 0;
      border: 3px solid currentColor;
      border-color: currentColor transparent transparent currentColor;
      border-radius: 50%;
      position: absolute;
      -webkit-transform: rotate(-45deg);
      transform: rotate(-45deg);
      -webkit-animation: inner-rotate .5s 1ms linear infinite alternate;
      animation: inner-rotate .5s 1ms linear infinite alternate;
      color: #3899ec;
      opacity: 0
    }

    .circle-preloader.white::before {
      color: #f0f0f0
    }

    .circle-preloader.white::after {
      color: #dcdcdc
    }

    @-webkit-keyframes inner-rotate {
      to {
        opacity: 1;
        -webkit-transform: rotate(115deg);
        transform: rotate(115deg)
      }
    }

    @keyframes inner-rotate {
      to {
        opacity: 1;
        -webkit-transform: rotate(115deg);
        transform: rotate(115deg)
      }
    }

    @-webkit-keyframes semi-rotate {
      from {
        -webkit-animation-timing-function: ease-out;
        animation-timing-function: ease-out;
        -webkit-transform: rotate(180deg);
        transform: rotate(180deg)
      }

      45% {
        -webkit-transform: rotate(198deg);
        transform: rotate(198deg)
      }

      55% {
        -webkit-transform: rotate(234deg);
        transform: rotate(234deg)
      }

      to {
        -webkit-transform: rotate(540deg);
        transform: rotate(540deg)
      }
    }

    @keyframes semi-rotate {
      from {
        -webkit-animation-timing-function: ease-out;
        animation-timing-function: ease-out;
        -webkit-transform: rotate(180deg);
        transform: rotate(180deg)
      }

      45% {
        -webkit-transform: rotate(198deg);
        transform: rotate(198deg)
      }

      55% {
        -webkit-transform: rotate(234deg);
        transform: rotate(234deg)
      }

      to {
        -webkit-transform: rotate(540deg);
        transform: rotate(540deg)
      }
    }

    .hidden-comp-ghost-mode {
      opacity: .5
    }

    .collapsed-comp-mode::after {
      position: absolute;
      top: 0;
      bottom: 0;
      left: 0;
      right: 0;
      content: '';
      background: -webkit-repeating-linear-gradient(135deg, transparent, transparent 49%, #2b5672 40%, #2b5672 40%, transparent 51%);
      background: repeating-linear-gradient(-45deg, transparent, transparent 49%, #2b5672 40%, #2b5672 40%, transparent 51%);
      background-size: 6px 6px;
      background-repeat: repeat
    }

    .g-transparent-a:link,
    .g-transparent-a:visited {
      border-color: transparent
    }

    .transitioning-comp * {
      transition: inherit !important;
      -webkit-transition: inherit !important
    }

    .selectionSharerContainer {
      position: absolute;
      background-color: #fff;
      box-shadow: 0 4px 10px 0 rgba(57, 86, 113, .24);
      width: 142px;
      height: 45px;
      border-radius: 100px;
      text-align: center
    }

    .selectionSharerContainer:after {
      content: "";
      position: absolute;
      bottom: -10px;
      left: 42%;
      border-width: 10px 10px 0;
      border-style: solid;
      border-color: #fff transparent;
      display: block;
      width: 0
    }

    .selectionSharerContainer .selectionSharerOption {
      display: inline-block;
      cursor: pointer;
      vertical-align: top;
      padding: 13px 11px 11px 13px;
      margin: 1px;
      z-index: -1
    }

    .selectionSharerContainer .selectionSharerVerticalSeparator {
      margin-top: 9px;
      margin-bottom: 18px;
      background-color: #eaf7ff;
      height: 26px;
      width: 1px;
      display: inline-block
    }

    .visual-focus-on .focus-ring:not(.has-custom-focus):focus,
    .visual-focus-on .focus-ring:not(.has-custom-focus):focus~.wixSdkShowFocusOnSibling {
      box-shadow: inset 0 0 0 2px #1f77ff, inset 0 0 0 1px #fff
    }

    body.prewarmup .hidden-during-prewarmup {
      visibility: hidden
    }

    #masterPage.mesh-layout[data-mesh-layout=grid] {
      display: -ms-grid;
      display: grid;
      -ms-grid-rows: max-content max-content min-content max-content;
      grid-template-rows: -webkit-max-content -webkit-max-content -webkit-min-content -webkit-max-content;
      grid-template-rows: max-content max-content min-content max-content;
      -ms-grid-columns: 100%;
      grid-template-columns: 100%;
      -webkit-box-align: start;
      -webkit-align-items: start;
      align-items: start;
      -webkit-box-pack: stretch;
      -webkit-justify-content: stretch;
      justify-content: stretch
    }

    #masterPage.mesh-layout[data-mesh-layout=grid] #PAGES_CONTAINER,
    #masterPage.mesh-layout[data-mesh-layout=grid] #SITE_FOOTER,
    #masterPage.mesh-layout[data-mesh-layout=grid] #SITE_FOOTER-placeholder,
    #masterPage.mesh-layout[data-mesh-layout=grid] #SITE_HEADER,
    #masterPage.mesh-layout[data-mesh-layout=grid] #SITE_HEADER-placeholder,
    #masterPage.mesh-layout[data-mesh-layout=grid] #SOSP_CONTAINER_CUSTOM_ID[data-state~=mobileView],
    #masterPage.mesh-layout[data-mesh-layout=grid] #soapAfterPagesContainer,
    #masterPage.mesh-layout[data-mesh-layout=grid] #soapBeforePagesContainer {
      -ms-grid-column: 1;
      -ms-grid-row-align: start;
      -ms-grid-column-align: start
    }

    #masterPage.mesh-layout[data-mesh-layout=grid] #SITE_HEADER,
    #masterPage.mesh-layout[data-mesh-layout=grid] #SITE_HEADER-placeholder {
      -ms-grid-row: 1;
      grid-area: 1/1/2/2
    }

    #masterPage.mesh-layout[data-mesh-layout=grid] #SOSP_CONTAINER_CUSTOM_ID[data-state~=mobileView] {
      -ms-grid-row: 2;
      grid-area: 2/1/3/2
    }

    #masterPage.mesh-layout[data-mesh-layout=grid] #PAGES_CONTAINER,
    #masterPage.mesh-layout[data-mesh-layout=grid] #soapAfterPagesContainer,
    #masterPage.mesh-layout[data-mesh-layout=grid] #soapBeforePagesContainer {
      -ms-grid-row: 3;
      grid-area: 3/1/4/2
    }

    #masterPage.mesh-layout[data-mesh-layout=grid] #soapAfterPagesContainer,
    #masterPage.mesh-layout[data-mesh-layout=grid] #soapBeforePagesContainer {
      width: 100%
    }

    #masterPage.mesh-layout[data-mesh-layout=grid] #PAGES_CONTAINER {
      -webkit-align-self: stretch;
      align-self: stretch
    }

    #masterPage.mesh-layout[data-mesh-layout=grid] main#PAGES_CONTAINER {
      display: block
    }

    #masterPage.mesh-layout[data-mesh-layout=grid] #SITE_FOOTER,
    #masterPage.mesh-layout[data-mesh-layout=grid] #SITE_FOOTER-placeholder {
      -ms-grid-row: 4;
      grid-area: 4/1/5/2
    }

    #masterPage.mesh-layout[data-mesh-layout=grid] #PAGES_CONTAINERcenteredContent,
    #masterPage.mesh-layout[data-mesh-layout=grid] #PAGES_CONTAINERinlineContent,
    #masterPage.mesh-layout[data-mesh-layout=grid] #SITE_PAGES {
      height: 100%
    }

    #masterPage.mesh-layout.desktop>* {
      width: 100%
    }

    #masterPage.mesh-layout #PAGES_CONTAINER,
    #masterPage.mesh-layout #SITE_FOOTER,
    #masterPage.mesh-layout #SITE_HEADER,
    #masterPage.mesh-layout #SOSP_CONTAINER_CUSTOM_ID[data-state~=mobileView],
    #masterPage.mesh-layout #masterPageinlineContent {
      position: relative
    }

    #masterPage.mesh-layout #SITE_FOOTER-placeholder,
    #masterPage.mesh-layout #SITE_HEADER-placeholder {
      display: none
    }

    #masterPage.mesh-layout #SITE_HEADER[data-state~=fixedPosition]~#SITE_HEADER-placeholder {
      display: block
    }

    #masterPage.mesh-layout #SITE_FOOTER[data-state~=fixedPosition]~#SITE_FOOTER-placeholder {
      display: block
    }

    #masterPage.mesh-layout #SITE_PAGES {
      height: auto;
      position: relative
    }

    #SITE_ROOT img:not([src]) {
      visibility: hidden
    }

    #SITE_ROOT svg img:not([src]) {
      visibility: visible
    }

    wix-image {
      display: block
    }
  </style>









  <style id="v7.languages.css">
    /*
This CSS resource incorporates links to font software which is the valuable copyrighted
property of Monotype Imaging and/or its suppliers. You may not attempt to copy, install,
redistribute, convert, modify or reverse engineer this font software. Please contact Monotype
Imaging with any questions regarding Web fonts:  http://webfonts.fonts.com
*/

    /* latin */
    @font-face {
      font-family: "Helvetica-W01-Roman";
      src: url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/ea95b44a-eab7-4bd1-861c-e73535e7f652.eot?#iefix");
      src: url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/ea95b44a-eab7-4bd1-861c-e73535e7f652.eot?#iefix") format("eot"), url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/4021a3b9-f782-438b-aeb4-c008109a8b64.woff") format("woff"), url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/669f79ed-002c-4ff6-965c-9da453968504.ttf") format("truetype"), url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/d17bc040-9e8b-4397-8356-8153f4a64edf.svg#d17bc040-9e8b-4397-8356-8153f4a64edf") format("svg");
    }

    @font-face {
      font-family: "Helvetica-W01-Bold";
      src: url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/f70da45a-a05c-490c-ad62-7db4894b012a.eot?#iefix");
      src: url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/f70da45a-a05c-490c-ad62-7db4894b012a.eot?#iefix") format("eot"), url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/c5749443-93da-4592-b794-42f28d62ef72.woff") format("woff"), url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/73805f15-38e4-4fb7-8a08-d56bf29b483b.ttf") format("truetype"), url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/874bbc4a-0091-49f0-93ef-ea4e69c3cc7a.svg#874bbc4a-0091-49f0-93ef-ea4e69c3cc7a") format("svg");
    }

    @font-face {
      font-family: "Braggadocio-W01";
      src: url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/f305266f-adfb-4e4f-9055-1d7328de8ce6.eot?#iefix");
      src: url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/f305266f-adfb-4e4f-9055-1d7328de8ce6.eot?#iefix") format("eot"), url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/518e4577-eecc-4ecd-adb4-2ee21df35b20.woff") format("woff"), url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/f46241ad-1f5d-4935-ad69-b0a78c2e191d.ttf") format("truetype"), url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/b2a0a25d-e054-4c65-bffa-e5760b48dec3.svg#b2a0a25d-e054-4c65-bffa-e5760b48dec3") format("svg");
    }

    @font-face {
      font-family: "Clarendon-W01-Medium-692107";
      src: url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/c6993450-d795-4fd3-b306-38481733894c.eot?#iefix");
      src: url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/c6993450-d795-4fd3-b306-38481733894c.eot?#iefix") format("eot"), url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/b6878f57-4d64-4d70-926d-fa4dec6173a5.woff") format("woff"), url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/0a6b6eff-6b5d-46d4-b681-f356eef1e4c1.ttf") format("truetype"), url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/600b1038-76a8-43b4-a2f7-2a6eb0681f95.svg#600b1038-76a8-43b4-a2f7-2a6eb0681f95") format("svg");
    }

    @font-face {
      font-family: "DIN-Next-W01-Light";
      src: url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/3e0b2cd7-9657-438b-b4af-e04122e8f1f7.eot?#iefix");
      src: url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/3e0b2cd7-9657-438b-b4af-e04122e8f1f7.eot?#iefix") format("eot"), url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/bc176270-17fa-4c78-a343-9fe52824e501.woff") format("woff"), url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/3516f91d-ac48-42cd-acfe-1be691152cc4.ttf") format("truetype"), url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/d1b1e866-a411-42ba-8f75-72bf28e23694.svg#d1b1e866-a411-42ba-8f75-72bf28e23694") format("svg");
    }

    @font-face {
      font-family: "SnellRoundhandW01-Scrip";
      src: url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/fea0fb7b-884b-4567-a6dc-addb8e67baaa.eot?#iefix");
      src: url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/fea0fb7b-884b-4567-a6dc-addb8e67baaa.eot?#iefix") format("eot"), url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/efbfc170-aaf0-4472-91f4-dbb5bc2f4c59.woff") format("woff"), url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/d974669d-978c-4bcf-8843-b2b7c366d097.ttf") format("truetype"), url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/5b2427b5-3c1e-4b17-9f3c-720a332c9142.svg#5b2427b5-3c1e-4b17-9f3c-720a332c9142") format("svg");
    }

    @font-face {
      font-family: "Stencil-W01-Bold";
      src: url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/cc642b17-a005-4f1e-86e8-baffa4647445.eot?#iefix");
      src: url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/cc642b17-a005-4f1e-86e8-baffa4647445.eot?#iefix") format("eot"), url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/a9eddc47-990d-47a3-be4e-c8cdec0090c6.woff") format("woff"), url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/8d108476-7a62-4664-821f-03c8a522c030.ttf") format("truetype"), url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/7823e34c-67dc-467a-bbfb-efbb5f6c90f0.svg#7823e34c-67dc-467a-bbfb-efbb5f6c90f0") format("svg");
    }

    @font-face {
      font-family: "Helvetica-W01-Light";
      src: url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/717f8140-20c9-4892-9815-38b48f14ce2b.eot?#iefix");
      src: url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/717f8140-20c9-4892-9815-38b48f14ce2b.eot?#iefix") format("eot"), url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/03805817-4611-4dbc-8c65-0f73031c3973.woff") format("woff"), url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/d5f9f72d-afb7-4c57-8348-b4bdac42edbb.ttf") format("truetype"), url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/05ad458f-263b-413f-b054-6001a987ff3e.svg#05ad458f-263b-413f-b054-6001a987ff3e") format("svg");
    }

    @font-face {
      font-family: "Victoria-Titling-MT-W90";
      src: url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/2b6731dc-305d-4dcd-928e-805163e26288.eot?#iefix");
      src: url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/2b6731dc-305d-4dcd-928e-805163e26288.eot?#iefix") format("eot"), url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/faceff42-b106-448b-b4cf-5b3a02ad61f1.woff") format("woff"), url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/82f103e4-7b1c-49af-862f-fe576da76996.ttf") format("truetype"), url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/46f6946a-4039-46e8-b001-be3e53068d46.svg#46f6946a-4039-46e8-b001-be3e53068d46") format("svg");
    }

    @font-face {
      font-family: "AmericanTypwrterITCW01--731025";
      src: url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/dff8aebe-deee-47a7-8575-b2f39c8473f8.eot?#iefix");
      src: url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/dff8aebe-deee-47a7-8575-b2f39c8473f8.eot?#iefix") format("eot"), url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/0c0f4d28-4c13-4e84-9a36-e63cd529ae86.woff") format("woff"), url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/7f26a278-84b3-4587-bf07-c8cdf7e347a9.ttf") format("truetype"), url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/254ab931-e6d6-4307-9762-5914ded49f13.svg#254ab931-e6d6-4307-9762-5914ded49f13") format("svg");
    }

    @font-face {
      font-family: "Soho-W01-Thin-Condensed";
      src: url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/b2d6b869-3f47-4c92-83d3-4546ffb860d0.eot?#iefix");
      src: url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/b2d6b869-3f47-4c92-83d3-4546ffb860d0.eot?#iefix") format("eot"), url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/f84b539d-ed34-4400-a139-c0f909af49aa.woff") format("woff"), url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/9ef27401-09c0-434f-b0f0-784445b52ea2.ttf") format("truetype"), url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/4ba3546a-32f7-4e7d-be64-8da01b23d46e.svg#4ba3546a-32f7-4e7d-be64-8da01b23d46e") format("svg");
    }

    @font-face {
      font-family: "Pacifica-W00-Condensed";
      src: url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/e50a5bb1-8246-4412-8c27-4a18ba89a0fd.eot?#iefix");
      src: url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/e50a5bb1-8246-4412-8c27-4a18ba89a0fd.eot?#iefix") format("eot"), url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/6849614c-986c-45b1-a1a7-39c891759bb9.woff") format("woff"), url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/8ccb835c-4668-432d-8d1d-099b48aafe4e.ttf") format("truetype"), url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/028040ec-b956-41d8-a07d-b4d3466b8ed8.svg#028040ec-b956-41d8-a07d-b4d3466b8ed8") format("svg");
    }

    @font-face {
      font-family: "Avenida-W01";
      src: url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/a8138b05-e5ff-482f-a8f6-8be894e01fc3.eot?#iefix");
      src: url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/a8138b05-e5ff-482f-a8f6-8be894e01fc3.eot?#iefix") format("eot"), url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/53f05821-c783-4593-bf20-c3d770f32863.woff") format("woff"), url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/b7215bbe-7870-4733-9e81-28398fbed38b.ttf") format("truetype"), url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/bc2def79-bd99-49b9-98b3-502e34cc5552.svg#bc2def79-bd99-49b9-98b3-502e34cc5552") format("svg");
    }

    @font-face {
      font-family: "ITC-Arecibo-W01-Regular";
      src: url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/036d6c0b-d067-431a-ab39-be3b89b1322f.eot?#iefix");
      src: url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/036d6c0b-d067-431a-ab39-be3b89b1322f.eot?#iefix") format("eot"), url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/5d6cd606-b520-4335-96e1-755691d666e8.woff") format("woff"), url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/03d7d783-5b99-4340-b373-97c00246ec27.ttf") format("truetype"), url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/a5fab48f-93a0-403a-b60e-bfdb0b69d973.svg#a5fab48f-93a0-403a-b60e-bfdb0b69d973") format("svg");
    }

    @font-face {
      font-family: "Droid-Serif-W01-Regular";
      src: url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/de5702ce-174b-4ee6-a608-6482d5d7eb71.eot?#iefix");
      src: url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/de5702ce-174b-4ee6-a608-6482d5d7eb71.eot?#iefix") format("eot"), url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/83ae2051-dcdd-4931-9946-8be747a40d00.woff") format("woff"), url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/63f35b58-a40f-4f53-bb3e-20396f202214.ttf") format("truetype"), url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/19db6ebc-2d1b-4835-9588-3fa45ff36f4e.svg#19db6ebc-2d1b-4835-9588-3fa45ff36f4e") format("svg");
    }

    @font-face {
      font-family: "Museo-W01-700";
      src: url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/3b3d99a2-6b36-4912-a93e-29277020a5cf.eot?#iefix");
      src: url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/3b3d99a2-6b36-4912-a93e-29277020a5cf.eot?#iefix") format("eot"), url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/28d74e9b-4ea9-4e3c-b265-c67a72c66856.woff") format("woff"), url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/b432b4e1-014a-4ed8-865c-249744f856b0.ttf") format("truetype"), url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/8e63fd1e-adc9-460e-9ef7-bbf98ee32a71.svg#8e63fd1e-adc9-460e-9ef7-bbf98ee32a71") format("svg");
    }

    @font-face {
      font-family: "Museo-Slab-W01-100";
      src: url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/01ab709f-22cf-4831-b24a-8cf4eb852687.eot?#iefix");
      src: url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/01ab709f-22cf-4831-b24a-8cf4eb852687.eot?#iefix") format("eot"), url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/cacc0862-f146-4746-92b1-60e6114a66c4.woff") format("woff"), url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/54006f54-b61e-4103-abf8-b1d0294a2a9c.ttf") format("truetype"), url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/e5841f2e-b306-4583-bfc3-a0e06742fedd.svg#e5841f2e-b306-4583-bfc3-a0e06742fedd") format("svg");
    }

    @font-face {
      font-family: "Geotica-W01-Four-Open";
      src: url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/91cc94e6-2c98-4b42-aaec-086abb6a9370.eot?#iefix");
      src: url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/91cc94e6-2c98-4b42-aaec-086abb6a9370.eot?#iefix") format("eot"), url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/cc0b2292-9358-41ee-b3b9-429952586f69.woff") format("woff"), url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/8558b493-da55-4e6f-b473-56d9c7dff2a4.ttf") format("truetype"), url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/ee507e8d-069a-4cb6-b184-62b1f3ab0102.svg#ee507e8d-069a-4cb6-b184-62b1f3ab0102") format("svg");
    }

    @font-face {
      font-family: "Marzo-W00-Regular";
      src: url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/45563891-20ab-4087-b16c-b3cfc26faac1.eot?#iefix");
      src: url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/45563891-20ab-4087-b16c-b3cfc26faac1.eot?#iefix") format("eot"), url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/e947b76a-edcf-4519-bc3d-c2da35865717.woff") format("woff"), url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/c09cb36e-5e79-4033-b854-41e57fbf44fa.ttf") format("truetype"), url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/f4245069-28b7-43b7-8a10-708b9f3c398b.svg#f4245069-28b7-43b7-8a10-708b9f3c398b") format("svg");
    }

    @font-face {
      font-family: "ReklameScriptW00-Medium";
      src: url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/5af7511a-dccc-450d-b2a2-bb8e3bb62540.eot?#iefix");
      src: url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/5af7511a-dccc-450d-b2a2-bb8e3bb62540.eot?#iefix") format("eot"), url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/05b176f5-c622-4c35-af98-c0c056dd5b66.woff") format("woff"), url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/9dcb5a3c-1c64-4c9c-a402-995bed762eb7.ttf") format("truetype"), url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/1e87d66a-d7f1-4869-8430-51662777be57.svg#1e87d66a-d7f1-4869-8430-51662777be57") format("svg");
    }

    @font-face {
      font-family: "Nimbus-Sans-TW01Con";
      src: url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/2101adaa-6a98-4fa9-b085-3b04c3722637.eot?#iefix");
      src: url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/2101adaa-6a98-4fa9-b085-3b04c3722637.eot?#iefix") format("eot"), url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/8fb1090e-b4d0-4685-ac8f-3d0c29d60130.woff") format("woff"), url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/5d5fc44e-e84b-48ca-a5a7-bed8bdbf79a1.ttf") format("truetype"), url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/24512b2a-e22d-4ebb-887c-a334d039433c.svg#24512b2a-e22d-4ebb-887c-a334d039433c") format("svg");
    }

    @font-face {
      font-family: "Bodoni-W01-Poster";
      src: url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/ab0e3d15-2f64-49c1-8898-817a2235e719.eot?#iefix");
      src: url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/ab0e3d15-2f64-49c1-8898-817a2235e719.eot?#iefix") format("eot"), url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/4d1b9848-7ebd-472c-9d31-4af0aa7faaea.woff") format("woff"), url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/197b5ef7-65e6-4af6-9fd9-bc9fc63038c7.ttf") format("truetype"), url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/a9bda117-c293-40b5-a2d8-9f923f32623c.svg#a9bda117-c293-40b5-a2d8-9f923f32623c") format("svg");
    }

    /* Mobile system fallbacks */

    @font-face {
      font-family: "Comic-Sans-W01-Regular";
      src: url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/0d67e115-f220-4a6a-81c2-ae0035bda922.eot?#iefix");
      src: url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/0d67e115-f220-4a6a-81c2-ae0035bda922.eot?#iefix") format("eot"), url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/234c98b8-36ae-45ab-8a55-77980708b2bc.woff") format("woff"), url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/7ff2970c-1d51-47be-863d-b33afda8fb40.ttf") format("truetype"), url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/f1afa7d8-abee-4268-9cf8-85d43150fdb1.svg#f1afa7d8-abee-4268-9cf8-85d43150fdb1") format("svg");
    }

    @font-face {
      font-family: "Courier-PS-W01";
      src: url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/b2977c8d-4907-4cc3-b5ed-3dec9ca68102.eot?#iefix");
      src: url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/b2977c8d-4907-4cc3-b5ed-3dec9ca68102.eot?#iefix") format("eot"), url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/b059d02a-a222-4c63-9fd3-705eaeea1c16.woff") format("woff"), url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/52e3d484-7188-4c9e-964e-b7a75e9dfa2f.ttf") format("truetype"), url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/c2182c36-8eb4-4a56-a0ff-dba7492ce96c.svg#c2182c36-8eb4-4a56-a0ff-dba7492ce96c") format("svg");
    }

    @font-face {
      font-family: "Impact-W01-2010";
      src: url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/9ae7059b-dd17-4a4c-8872-5cb4dd551277.eot?#iefix");
      src: url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/9ae7059b-dd17-4a4c-8872-5cb4dd551277.eot?#iefix") format("eot"), url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/4cefdf47-0136-4169-9933-3225dbbec9d9.woff") format("woff"), url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/f7450934-42f3-4193-befa-c825772a9454.ttf") format("truetype"), url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/25aa5449-ccc1-4f0e-ab3f-4cf3b959208f.svg#25aa5449-ccc1-4f0e-ab3f-4cf3b959208f") format("svg");
    }

    @font-face {
      font-family: "Lucida-Console-W01";
      src: url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/527cb305-deee-4810-b337-67756678c830.eot?#iefix");
      src: url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/527cb305-deee-4810-b337-67756678c830.eot?#iefix") format("eot"), url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/60f4a13f-3943-432a-bb51-b612e41239c5.woff") format("woff"), url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/38229089-ebec-4782-b8f2-304cfdcea8d8.ttf") format("truetype"), url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/f855783c-1079-4396-a7b7-f7d9179145be.svg#f855783c-1079-4396-a7b7-f7d9179145be") format("svg");
    }

    @font-face {
      font-family: "Tahoma-W01-Regular";
      src: url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/1b155b1c-e651-4a51-9d03-0ca480aeaf9f.eot?#iefix");
      src: url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/1b155b1c-e651-4a51-9d03-0ca480aeaf9f.eot?#iefix") format("eot"), url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/20323430-24f4-4767-9d4d-060d1e89758a.woff") format("woff"), url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/6e17e62d-30cb-4840-8e9d-328c6b62316e.ttf") format("truetype"), url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/04ab3894-45ce-42ef-aa11-e7c0cd7f7da9.svg#04ab3894-45ce-42ef-aa11-e7c0cd7f7da9") format("svg");
    }

    @font-face {
      font-family: "Arial-W01-Black";
      src: url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/bf85e414-1b16-4cd1-8ce8-dad15daa7daa.eot?#iefix");
      src: url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/bf85e414-1b16-4cd1-8ce8-dad15daa7daa.eot?#iefix") format("eot"),
        url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/c6f5bcd6-66fc-44af-be95-bb1f2b38d080.woff") format("woff"),
        url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/7b5b436b-a511-402a-88d6-dbac700cee36.ttf") format("truetype"),
        url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/a5adcd35-c36a-4b18-953d-47c029de4ef6.svg#a5adcd35-c36a-4b18-953d-47c029de4ef6") format("svg");
    }

    /* Greek and others */

    @font-face {
      font-family: "Tahoma-W15--Regular";
      src: url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/f0dd334c-878c-442c-bda3-0dbd122e87f1.eot?#iefix");
      src: url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/f0dd334c-878c-442c-bda3-0dbd122e87f1.eot?#iefix") format("eot"), url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/ae844b11-5158-4caf-90b4-7ace49ac3440.woff") format("woff"), url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/e63ef4f4-b7b9-4f13-8db5-d7f5cf89839f.ttf") format("truetype"), url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/5ad2ed93-1ba0-4b2c-a421-22c5bcfb5b79.svg#5ad2ed93-1ba0-4b2c-a421-22c5bcfb5b79") format("svg");
    }

    @font-face {
      font-family: "Tahoma-W99-Regular";
      src: url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/c3ebf729-2608-4787-9e5a-248f329aface.eot?#iefix");
      src: url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/c3ebf729-2608-4787-9e5a-248f329aface.eot?#iefix") format("eot"), url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/d3bbaa1b-d5e3-431f-93a7-9cea63601bb6.woff") format("woff"), url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/78cb924f-227d-4ab9-83d5-f2b2e6656da5.ttf") format("truetype"), url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/ca045297-34e1-462e-acc8-75ef196ada02.svg#ca045297-34e1-462e-acc8-75ef196ada02") format("svg");
    }

    /*******************/

    @font-face {
      font-family: "Coquette-W00-Light";
      src: url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/b8c1ddea-29ea-42ec-8a48-32a89e792d3b.eot?#iefix");
      src: url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/b8c1ddea-29ea-42ec-8a48-32a89e792d3b.eot?#iefix") format("eot"), url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/4e5374b3-a214-41e5-81f0-a34c9292da7e.woff") format("woff"), url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/c20581c8-0023-4888-aeaa-9d32636dc17f.ttf") format("truetype"), url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/e514ed32-1687-47d8-8b39-423fb7664d33.svg#e514ed32-1687-47d8-8b39-423fb7664d33") format("svg");
    }

    @font-face {
      font-family: "Rosewood-W01-Regular";
      src: url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/bd86870e-0679-4116-aa13-96aa1d6c5944.eot?#iefix");
      src: url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/bd86870e-0679-4116-aa13-96aa1d6c5944.eot?#iefix") format("eot"), url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/4d9bc879-ab51-45da-bf37-c9710cd1cc32.woff") format("woff"), url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/a5564fdb-3616-4f27-a4e4-d932b6ae5b4a.ttf") format("truetype"), url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/f128ef28-daf3-477b-8027-0fd8bdad2b91.svg#f128ef28-daf3-477b-8027-0fd8bdad2b91") format("svg");
    }

    @font-face {
      font-family: "segoe_printregular";
      src: url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/open-source/segoe_print-webfont.eot?#iefix");
      src: url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/open-source/segoe_print-webfont.eot?#iefix") format("eot"),
        url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/open-source/segoe_print-webfont.woff") format("woff"),
        url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/open-source/segoe_print-webfont.ttf") format("truetype"),
        url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/open-source/segoe_print-webfont.svg#f128ef28-daf3-477b-8027-0fd8bdad2b91") format("svg");
    }

    @font-face {
      font-family: 'Open Sans';
      font-style: normal;
      font-weight: 400;
      src: url('//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/open-source/opensans-regular-webfont.eot');
      src: url('//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/open-source/opensans-regular-webfont.eot?#iefix') format('embedded-opentype'),
        url('//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/open-source/opensans-regular-webfont.woff') format('woff'),
        url('//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/open-source/opensans-regular-webfont.ttf') format('truetype'),
        url('//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/open-source/opensans-regular-webfont.svg#open_sansregular') format('svg');
    }

    @font-face {
      font-family: 'Open Sans';
      font-style: normal;
      font-weight: 700;
      src: url('//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/open-source/opensans-bold-webfont.eot');
      src: url('//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/open-source/opensans-bold-webfont.eot?#iefix') format('embedded-opentype'),
        url('//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/open-source/opensans-bold-webfont.woff') format('woff'),
        url('//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/open-source/opensans-bold-webfont.ttf') format('truetype'),
        url('//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/open-source/opensans-bold-webfont.svg#open_sansregular') format('svg');
    }

    @font-face {
      font-family: 'Open Sans';
      font-style: italic;
      font-weight: 400;
      src: url('//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/open-source/opensans-italic-webfont.eot');
      src: url('//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/open-source/opensans-italic-webfont.eot?#iefix') format('embedded-opentype'),
        url('//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/open-source/opensans-italic-webfont.woff') format('woff'),
        url('//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/open-source/opensans-italic-webfont.ttf') format('truetype'),
        url('//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/open-source/opensans-italic-webfont.svg#open_sansregular') format('svg');
    }

    @font-face {
      font-family: 'Open Sans';
      font-style: italic;
      font-weight: 700;
      src: url('//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/open-source/opensans-bolditalic-webfont.eot');
      src: url('//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/open-source/opensans-bolditalic-webfont.eot?#iefix') format('embedded-opentype'),
        url('//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/open-source/opensans-bolditalic-webfont.woff') format('woff'),
        url('//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/open-source/opensans-bolditalic-webfont.ttf') format('truetype'),
        url('//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/open-source/opensans-bolditalic-webfont.svg#open_sansregular') format('svg');
    }

    @font-face {
      font-family: "Avenir-LT-W01_35-Light1475496";
      src: url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/edefe737-dc78-4aa3-ad03-3c6f908330ed.eot?#iefix");
      src: url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/edefe737-dc78-4aa3-ad03-3c6f908330ed.eot?#iefix") format("eot"), url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/0078f486-8e52-42c0-ad81-3c8d3d43f48e.woff2") format("woff2"), url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/908c4810-64db-4b46-bb8e-823eb41f68c0.woff") format("woff"), url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/4577388c-510f-4366-addb-8b663bcc762a.ttf") format("truetype"), url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/b0268c31-e450-4159-bfea-e0d20e2b5c0c.svg#b0268c31-e450-4159-bfea-e0d20e2b5c0c") format("svg");
    }

    @font-face {
      font-family: "Avenir-LT-W01_85-Heavy1475544";
      src: url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/6af9989e-235b-4c75-8c08-a83bdaef3f66.eot?#iefix");
      src: url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/6af9989e-235b-4c75-8c08-a83bdaef3f66.eot?#iefix") format("eot"), url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/d513e15e-8f35-4129-ad05-481815e52625.woff2") format("woff2"), url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/61bd362e-7162-46bd-b67e-28f366c4afbe.woff") format("woff"), url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/ccd17c6b-e7ed-4b73-b0d2-76712a4ef46b.ttf") format("truetype"), url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/20577853-40a7-4ada-a3fb-dd6e9392f401.svg#20577853-40a7-4ada-a3fb-dd6e9392f401") format("svg");
    }

    @font-face {
      font-family: "BaskervilleMTW01-SmBdIt";
      src: url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/0224f3fd-52d3-499a-ae2f-637a041f87f0.eot?#iefix");
      src: url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/0224f3fd-52d3-499a-ae2f-637a041f87f0.eot?#iefix") format("eot"), url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/c887df8e-b6c3-4c97-85b8-91cfdde77b07.woff2") format("woff2"), url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/5c4d5432-75c4-4f6b-a6e7-8af4d54a33d1.woff") format("woff"), url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/2ee46b89-b7cb-4bbe-9d60-b7ca4354b706.ttf") format("truetype"), url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/9714d635-13b3-48b2-9315-5d0f72a69ab9.svg#9714d635-13b3-48b2-9315-5d0f72a69ab9") format("svg");
    }

    @font-face {
      font-family: "Belinda-W00-Regular";
      src: url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/63d38753-a8d9-4262-b844-3a007ad848b4.eot?#iefix");
      src: url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/63d38753-a8d9-4262-b844-3a007ad848b4.eot?#iefix") format("eot"), url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/242487aa-209a-4dbd-aca2-64a3c73a8946.woff2") format("woff2"), url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/4381b252-d9f8-4201-bbf3-9440e21259e7.woff") format("woff"), url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/46c2c4f2-cd15-4b7b-a4b4-aa04dbbd1655.ttf") format("truetype"), url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/334f8999-3703-47f3-b147-96b6dc3bf4b2.svg#334f8999-3703-47f3-b147-96b6dc3bf4b2") format("svg");
    }

    @font-face {
      font-family: "Brandon-Grot-W01-Light";
      src: url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/e00ba30a-0bf3-4c76-9392-8641fa237a92.eot?#iefix");
      src: url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/e00ba30a-0bf3-4c76-9392-8641fa237a92.eot?#iefix") format("eot"), url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/69b40392-453a-438a-a121-a49e5fbc9213.woff2") format("woff2"), url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/9362bca5-b362-4543-a051-2129e2def911.woff") format("woff"), url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/85060878-ca6c-43cc-ac31-7edccfdca71b.ttf") format("truetype"), url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/47f089a6-c8ce-46fa-b98f-03b8c0619d8a.svg#47f089a6-c8ce-46fa-b98f-03b8c0619d8a") format("svg");
    }

    @font-face {
      font-family: "Bree-W01-Thin-Oblique";
      src: url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/4e33bf74-813a-4818-8313-6ea9039db056.eot?#iefix");
      src: url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/4e33bf74-813a-4818-8313-6ea9039db056.eot?#iefix") format("eot"), url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/ceb3b4a3-0083-44ae-95cb-e362f95cc91b.woff2") format("woff2"), url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/4d716cea-5ba0-437a-b5a8-89ad159ea2be.woff") format("woff"), url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/c458fc09-c8dd-4423-9767-e3e27082f155.ttf") format("truetype"), url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/85ffb31e-78ee-4e21-83d8-4313269135a9.svg#85ffb31e-78ee-4e21-83d8-4313269135a9") format("svg");
    }

    @font-face {
      font-family: "Adobe-Caslon-W01-SmBd";
      src: url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/d2804130-67b0-4fcf-98fe-d781df92a56e.eot?#iefix");
      src: url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/d2804130-67b0-4fcf-98fe-d781df92a56e.eot?#iefix") format("eot"), url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/becfadb1-eaca-4817-afbd-fe4d61e1f661.woff2") format("woff2"), url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/6530bac7-21ac-4e52-a014-dce6a8d937ab.woff") format("woff"), url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/b34e8a45-c92d-4402-89bc-43cc51c6b4e0.ttf") format("truetype"), url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/0804bb4a-399c-4547-9fa8-0acf6268d8f6.svg#0804bb4a-399c-4547-9fa8-0acf6268d8f6") format("svg");
    }

    @font-face {
      font-family: "Didot-W01-Italic";
      src: url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/9c2cfd19-472b-4ef5-ad73-43eee68dc43b.eot?#iefix");
      src: url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/9c2cfd19-472b-4ef5-ad73-43eee68dc43b.eot?#iefix") format("eot"), url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/abe3d3a9-c990-459f-9407-54ac96cd2f00.woff2") format("woff2"), url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/09a4b57b-7400-4d30-b4ba-d6e303c57868.woff") format("woff"), url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/a0cb08d5-975f-4c8d-bcdc-d771a014d92a.ttf") format("truetype"), url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/86d60a09-e8f8-4003-b688-0f8a2aba6532.svg#86d60a09-e8f8-4003-b688-0f8a2aba6532") format("svg");
    }

    @font-face {
      font-family: "Futura-LT-W01-Light";
      src: url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/2b40e918-d269-4fd9-a572-19f5fec7cd7f.eot?#iefix");
      src: url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/2b40e918-d269-4fd9-a572-19f5fec7cd7f.eot?#iefix") format("eot"), url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/26091050-06ef-4fd5-b199-21b27c0ed85e.woff2") format("woff2"), url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/cca525a8-ad89-43ae-aced-bcb49fb271dc.woff") format("woff"), url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/88cc7a39-1834-4468-936a-f3c25b5d81a1.ttf") format("truetype"), url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/14d6bf5d-15f1-4794-b18e-c03fb9a5187e.svg#14d6bf5d-15f1-4794-b18e-c03fb9a5187e") format("svg");
    }

    @font-face {
      font-family: "Futura-LT-W01-Book";
      src: url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/cf053eae-ba1f-44f3-940c-a34b68ccbbdf.eot?#iefix");
      src: url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/cf053eae-ba1f-44f3-940c-a34b68ccbbdf.eot?#iefix") format("eot"), url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/8bf38806-3423-4080-b38f-d08542f7e4ac.woff2") format("woff2"), url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/e2b9cbeb-fa8e-41cd-8a6a-46044b29ba52.woff") format("woff"), url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/c2a69697-4f06-4764-abd4-625031a84e31.ttf") format("truetype"), url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/dc423cc1-bf86-415c-bc7d-ad7dde416a34.svg#dc423cc1-bf86-415c-bc7d-ad7dde416a34") format("svg");
    }

    @font-face {
      font-family: "Kepler-W03-Light-SCd-Cp";
      src: url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/fc00d5ae-6d96-4b5c-b68b-4f5bdb562c98.eot?#iefix");
      src: url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/fc00d5ae-6d96-4b5c-b68b-4f5bdb562c98.eot?#iefix") format("eot"), url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/b2b1472c-55f2-478a-a9c9-9373214a27e5.woff2") format("woff2"), url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/20f7861b-3ff7-47f3-b0f5-1e0626824a63.woff") format("woff"), url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/5c51e7a0-6ecc-46eb-a9ee-376f8c4073af.ttf") format("truetype"), url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/37bea6d0-2f14-4e48-a76f-fd85171dcf26.svg#37bea6d0-2f14-4e48-a76f-fd85171dcf26") format("svg");
    }

    @font-face {
      font-family: "Lulo-Clean-W01-One-Bold";
      src: url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/0163ac22-50a7-406e-aa64-c62ee6fbf3d7.eot?#iefix");
      src: url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/0163ac22-50a7-406e-aa64-c62ee6fbf3d7.eot?#iefix") format("eot"), url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/aee74cb3-c913-4b54-9722-6001c92325f2.woff2") format("woff2"), url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/80de9d5d-ab5f-40ce-911b-104e51e93d7c.woff") format("woff"), url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/1b46b05b-cfdd-4d82-8c2f-5c6cfba1fe60.ttf") format("truetype"), url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/be340f0b-a2d4-41df-acb1-4dc124330a88.svg#be340f0b-a2d4-41df-acb1-4dc124330a88") format("svg");
    }

    @font-face {
      font-family: "Proxima-N-W01-Reg";
      src: url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/7e90123f-e4a7-4689-b41f-6bcfe331c00a.eot?#iefix");
      src: url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/7e90123f-e4a7-4689-b41f-6bcfe331c00a.eot?#iefix") format("eot"), url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/64017d81-9430-4cba-8219-8f5cc28b923e.woff2") format("woff2"), url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/e56ecb6d-da41-4bd9-982d-2d295bec9ab0.woff") format("woff"), url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/2aff4f81-3e97-4a83-9e6c-45e33c024796.ttf") format("truetype"), url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/ab9cd062-380f-4b53-b1a7-c0bec7402235.svg#ab9cd062-380f-4b53-b1a7-c0bec7402235") format("svg");
    }

    @font-face {
      font-family: "Trend-Sans-W00-Four";
      src: url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/392aa98f-a1bf-4dc4-9def-a5d27c73a0de.eot?#iefix");
      src: url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/392aa98f-a1bf-4dc4-9def-a5d27c73a0de.eot?#iefix") format("eot"), url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/29c66f1e-5243-4f34-8a19-47405f72954c.woff2") format("woff2"), url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/c81cca03-5f1a-4252-9950-096e60e2bde9.woff") format("woff"), url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/569b48ce-f71b-4e2d-a80a-1920efbd7187.ttf") format("truetype"), url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/f284409f-3669-43df-bfe1-f9f9ee1bbc07.svg#f284409f-3669-43df-bfe1-f9f9ee1bbc07") format("svg");
    }

    @font-face {
      font-family: "DINNeuzeitGroteskLTW01-_812426";
      src: url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/b41558bd-2862-46c0-abf7-536d2542fa26.eot?#iefix");
      src: url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/b41558bd-2862-46c0-abf7-536d2542fa26.eot?#iefix") format("eot"), url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/5cee8d6e-89ad-4d8c-a0ac-584d316b15ae.woff2") format("woff2"), url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/388ef902-2c31-4818-abb1-a40dcd81f6d6.woff") format("woff"), url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/29c60077-2614-4061-aa8d-5bcfdf7354bb.ttf") format("truetype"), url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/76250d27-b353-4f3b-90c6-0ff635fabaab.svg#76250d27-b353-4f3b-90c6-0ff635fabaab") format("svg");
    }

    @font-face {
      font-family: "Peaches-and-Cream-Regular-W00";
      src: url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/2250f930-9a6d-4486-a0eb-6b407c5d6c9b.eot?#iefix");
      src: url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/2250f930-9a6d-4486-a0eb-6b407c5d6c9b.eot?#iefix") format("eot"), url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/3c5beda8-45cc-4f76-abca-8eccfeb6220c.woff2") format("woff2"), url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/b36b499f-d776-461c-bacb-fcbebe1cb9b4.woff") format("woff"), url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/896d3828-26ce-462a-9f70-62e0b5c90a70.ttf") format("truetype"), url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/0dccbec2-a882-4dd9-8da0-3a035c808ce0.svg#0dccbec2-a882-4dd9-8da0-3a035c808ce0") format("svg");
    }

    /* latin-ext */

    @font-face {
      font-family: "Helvetica-W02-Roman";
      src: url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/e4bd4516-4480-43df-aa6e-4e9b9029f53e.eot?#iefix");
      src: url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/e4bd4516-4480-43df-aa6e-4e9b9029f53e.eot?#iefix") format("eot"), url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/b56b944e-bbe0-4450-a241-de2125d3e682.woff") format("woff"), url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/7da02f05-ae8b-43a1-aeb9-83b3c0527c06.ttf") format("truetype"), url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/66cac56e-d017-4544-9d0c-f7d978f0c5c2.svg#66cac56e-d017-4544-9d0c-f7d978f0c5c2") format("svg");
    }

    @font-face {
      font-family: "Helvetica-W02-Bold";
      src: url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/8c0d8b0f-d7d6-4a72-a418-c2373e4cbf27.eot?#iefix");
      src: url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/8c0d8b0f-d7d6-4a72-a418-c2373e4cbf27.eot?#iefix") format("eot"), url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/192dac76-a6d9-413d-bb74-22308f2e0cc5.woff") format("woff"), url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/47584448-98c4-436c-89b9-8d6fbeb2a776.ttf") format("truetype"), url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/375c70e5-6822-492b-8408-7cd350440af7.svg#375c70e5-6822-492b-8408-7cd350440af7") format("svg");
    }

    @font-face {
      font-family: "Clarendon-W02-Medium-693834";
      src: url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/be976e1d-6edc-4a1b-b50e-a6d326b5a02f.eot?#iefix");
      src: url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/be976e1d-6edc-4a1b-b50e-a6d326b5a02f.eot?#iefix") format("eot"), url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/01681361-4a95-4651-a6c8-4005d0fc4a79.woff") format("woff"), url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/fdc26895-148e-4fa8-898d-5eb459dabecf.ttf") format("truetype"), url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/d59136e2-c38a-4ad4-8dec-2d258c12fd80.svg#d59136e2-c38a-4ad4-8dec-2d258c12fd80") format("svg");
    }

    @font-face {
      font-family: "DIN-Next-W02-Light";
      src: url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/48e5a0e1-2d56-46e5-8fc4-3d6d5c973cbf.eot?#iefix");
      src: url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/48e5a0e1-2d56-46e5-8fc4-3d6d5c973cbf.eot?#iefix") format("eot"), url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/07d62b21-8d7a-4c36-be86-d32ab1089972.woff") format("woff"), url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/c0050890-bbed-44b9-94df-2611d72dbb06.ttf") format("truetype"), url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/9f774d17-c03a-418e-a375-34f3beecbc7a.svg#9f774d17-c03a-418e-a375-34f3beecbc7a") format("svg");
    }

    @font-face {
      font-family: "AmericanTypwrterITCW02--737091";
      src: url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/04bcef92-4ec9-4491-9f06-433987df0eea.eot?#iefix");
      src: url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/04bcef92-4ec9-4491-9f06-433987df0eea.eot?#iefix") format("eot"), url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/4e5713c6-f9bf-44d7-bc17-775b7c102f1c.woff") format("woff"), url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/80e40eb9-815f-4b42-9e99-297117a6ef52.ttf") format("truetype"), url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/25bb0c90-be7f-4dfc-bfff-5cd159d09832.svg#25bb0c90-be7f-4dfc-bfff-5cd159d09832") format("svg");
    }

    @font-face {
      font-family: "Helvetica-W02-Light";
      src: url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/ff80873b-6ac3-44f7-b029-1b4111beac76.eot?#iefix");
      src: url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/ff80873b-6ac3-44f7-b029-1b4111beac76.eot?#iefix") format("eot"), url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/80c34ad2-27c2-4d99-90fa-985fd64ab81a.woff") format("woff"), url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/b8cb02c2-5b58-48d8-9501-8d02869154c2.ttf") format("truetype"), url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/92c941ea-2b06-4b72-9165-17476d424d6c.svg#92c941ea-2b06-4b72-9165-17476d424d6c") format("svg");
    }

    @font-face {
      font-family: "Soho-W02-Thin-Condensed";
      src: url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/61d1e245-4016-4f23-ad7a-409a44cabe90.eot?#iefix");
      src: url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/61d1e245-4016-4f23-ad7a-409a44cabe90.eot?#iefix") format("eot"), url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/68eb3cfd-be6c-4f9e-8ca4-e13ce8d29329.woff") format("woff"), url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/6db04d94-de0b-4bf0-bf94-113fd27e7440.ttf") format("truetype"), url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/84e110e9-fd29-4036-b9ad-27968a6ba793.svg#84e110e9-fd29-4036-b9ad-27968a6ba793") format("svg");
    }

    @font-face {
      font-family: "Avenida-W02";
      src: url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/131201ff-3951-4583-b4d9-2bc668927583.eot?#iefix");
      src: url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/131201ff-3951-4583-b4d9-2bc668927583.eot?#iefix") format("eot"), url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/582278da-0505-4fbe-9102-2b529c7c973a.woff") format("woff"), url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/b82fbde2-1655-4728-96a9-90ef022c4590.ttf") format("truetype"), url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/d325b64f-214b-4fc0-80d6-4c61621cd542.svg#d325b64f-214b-4fc0-80d6-4c61621cd542") format("svg");
    }

    @font-face {
      font-family: "Droid-Serif-W02-Regular";
      src: url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/872d17cf-70ac-4722-b8ef-0f1578125042.eot?#iefix");
      src: url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/872d17cf-70ac-4722-b8ef-0f1578125042.eot?#iefix") format("eot"), url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/764779cf-076d-427a-87b4-136ccc83fba0.woff") format("woff"), url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/f32cc734-5673-41a1-bd6e-1900c78691f5.ttf") format("truetype"), url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/f627e21b-c1a5-4e7a-b072-37391ee8dcef.svg#f627e21b-c1a5-4e7a-b072-37391ee8dcef") format("svg");
    }

    /* Mobile system fallbacks */

    @font-face {
      font-family: "Comic-Sans-W02-Regular";
      src: url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/6a8b1499-f534-46fe-a0af-835bc83226cd.eot?#iefix");
      src: url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/6a8b1499-f534-46fe-a0af-835bc83226cd.eot?#iefix") format("eot"), url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/301e2ea2-8153-453c-9051-0a729098e682.woff") format("woff"), url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/cbe882c0-2ac0-4a28-8fe7-14e527942047.ttf") format("truetype"), url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/ec680f09-6b07-442d-ab11-cea208cc138d.svg#ec680f09-6b07-442d-ab11-cea208cc138d") format("svg");
    }

    @font-face {
      font-family: "Courier-PS-W02";
      src: url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/440875eb-e437-41fc-8aae-b5658bbea3b7.eot?#iefix");
      src: url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/440875eb-e437-41fc-8aae-b5658bbea3b7.eot?#iefix") format("eot"), url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/bcc470b9-5a9b-45e9-bf60-6daca06bc70e.woff") format("woff"), url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/f9018056-f579-4c4c-95ea-9bd02b859724.ttf") format("truetype"), url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/f6d0e775-b2fc-4bc8-8967-cd78486d451c.svg#f6d0e775-b2fc-4bc8-8967-cd78486d451c") format("svg");
    }

    @font-face {
      font-family: "Impact-W02-2010";
      src: url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/02fb45ce-d7cc-491c-a176-e2a883a632b2.eot?#iefix");
      src: url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/02fb45ce-d7cc-491c-a176-e2a883a632b2.eot?#iefix") format("eot"), url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/eb1185bb-8f9d-4855-83fa-d06f0efef677.woff") format("woff"), url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/5386718d-bec6-41c5-b998-12dd1c859c53.ttf") format("truetype"), url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/01aba52b-d32b-41fc-a681-d7b4dfa43041.svg#01aba52b-d32b-41fc-a681-d7b4dfa43041") format("svg");
    }

    @font-face {
      font-family: "Lucida-Console-W02";
      src: url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/5606db21-eb18-48fa-979b-63bdf28555c0.eot?#iefix");
      src: url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/5606db21-eb18-48fa-979b-63bdf28555c0.eot?#iefix") format("eot"), url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/3e5b24ea-4345-4830-8c7d-0e7ef26b4e63.woff") format("woff"), url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/7b175f51-ff6c-47d2-908c-ee8538c2880d.ttf") format("truetype"), url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/bd1a6a52-e0c2-4a1b-b5a4-2d25ec2b5706.svg#bd1a6a52-e0c2-4a1b-b5a4-2d25ec2b5706") format("svg");
    }

    @font-face {
      font-family: "Tahoma-W02-Regular";
      src: url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/bb223dcd-0a16-4e5a-b38b-4f2a29f2bcbb.eot?#iefix");
      src: url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/bb223dcd-0a16-4e5a-b38b-4f2a29f2bcbb.eot?#iefix") format("eot"), url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/94e45703-fbd7-46e5-9fcd-228ae59d6266.woff") format("woff"), url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/ef282b80-58de-4b03-a90f-c5703d54e3b7.ttf") format("truetype"), url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/cb11dfc6-f3c4-4a58-83ac-df735ba9c428.svg#cb11dfc6-f3c4-4a58-83ac-df735ba9c428") format("svg");
    }

    @font-face {
      font-family: "Rosewood-W08-Regular";
      src: url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/f432fcbc-ae52-4db1-a4b3-c7145e69b3b6.eot?#iefix");
      src: url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/f432fcbc-ae52-4db1-a4b3-c7145e69b3b6.eot?#iefix") format("eot"), url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/62a23651-230c-4724-b2c0-087544ed1a27.woff") format("woff"), url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/e46f32da-eb61-45e5-a1b8-49f3a5f782f8.ttf") format("truetype"), url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/9e73fac6-b45b-4ac5-a601-9a0d70cd45b2.svg#9e73fac6-b45b-4ac5-a601-9a0d70cd45b2") format("svg");
    }

    @font-face {
      font-family: "Arial-W02-Black";
      src: url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/c06088a2-994d-44b4-9b38-55d2ae9e13a9.eot?#iefix");
      src: url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/c06088a2-994d-44b4-9b38-55d2ae9e13a9.eot?#iefix") format("eot"),
        url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/41280d6d-9240-4d82-9e98-3ea1a1913501.woff") format("woff"),
        url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/bc33f504-28ac-46ae-b258-d4fd1f599c47.ttf") format("truetype"),
        url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/0faa6338-fe10-42e6-9346-2c6626ddcd73.svg#0faa6338-fe10-42e6-9346-2c6626ddcd73") format("svg");
    }

    /* cyrillic */
    @font-face {
      font-family: "DIN-Next-W10-Light";
      src: url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/3d009cd7-c8fe-40c0-93da-74f4ea8c530b.eot?#iefix");
      src: url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/3d009cd7-c8fe-40c0-93da-74f4ea8c530b.eot?#iefix") format("eot"), url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/a9e95a29-98a7-404a-90ee-1929ad09c696.woff") format("woff"), url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/0a7663fd-eae8-4e50-a67a-225271f8cceb.ttf") format("truetype"), url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/58ae9be9-5d95-44b6-8b6c-e6da6a46822c.svg#58ae9be9-5d95-44b6-8b6c-e6da6a46822c") format("svg");
    }

    @font-face {
      font-family: "Helvetica-LT-W10-Bold";
      src: url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/9fe262dc-5a55-4d75-91a4-aed76bd32190.eot?#iefix");
      src: url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/9fe262dc-5a55-4d75-91a4-aed76bd32190.eot?#iefix") format("eot"), url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/0a3939d0-3833-4db3-8b85-f64c2b3350d2.woff") format("woff"), url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/1b128d6d-126f-4c9c-8f87-3e7d30a1671c.ttf") format("truetype"), url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/b791c850-fde1-48b3-adf0-8998d55b0866.svg#b791c850-fde1-48b3-adf0-8998d55b0866") format("svg");
    }

    @font-face {
      font-family: "Helvetica-LT-W10-Roman";
      src: url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/686a6a06-e711-4bd2-b393-8504a497bb3c.eot?#iefix");
      src: url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/686a6a06-e711-4bd2-b393-8504a497bb3c.eot?#iefix") format("eot"), url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/6f8d1983-4d34-4fa4-9110-988f6c495757.woff") format("woff"), url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/7903ee3f-e9ab-4bdc-b7d2-d232de2da580.ttf") format("truetype"), url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/9c58e9ea-fdea-4b9c-b0f9-0a2157389ed0.svg#9c58e9ea-fdea-4b9c-b0f9-0a2157389ed0") format("svg");
    }

    @font-face {
      font-family: "Bodoni-Poster-W10";
      src: url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/3f2ac2b4-0662-446d-8b8a-51738492ea04.eot?#iefix");
      src: url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/3f2ac2b4-0662-446d-8b8a-51738492ea04.eot?#iefix") format("eot"), url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/e04da7b7-ccbf-4cbf-b19a-947551d17de6.woff") format("woff"), url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/cb3483cd-190a-4634-b345-d88f22f1e6f5.ttf") format("truetype"), url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/fea2ad42-3ce1-43c4-b571-39159cc109a6.svg#fea2ad42-3ce1-43c4-b571-39159cc109a6") format("svg");
    }

    @font-face {
      font-family: "Droid-Serif-W10-Regular";
      src: url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/d039cfc8-41eb-46d5-ad1a-faf4f0d26222.eot?#iefix");
      src: url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/d039cfc8-41eb-46d5-ad1a-faf4f0d26222.eot?#iefix") format("eot"), url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/571d67cb-de3d-41af-8c0a-06a53d490466.woff") format("woff"), url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/70f941f5-d702-4e7b-8b15-ee65e6b855b9.ttf") format("truetype"), url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/e0ffd68e-55a8-4537-b2d1-c51865ac15ee.svg#e0ffd68e-55a8-4537-b2d1-c51865ac15ee") format("svg");
    }

    /* Mobile system fallbacks */

    @font-face {
      font-family: "Comic-Sans-W10-Regular";
      src: url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/6ea78fbd-72da-406c-bd23-556297e62ebb.eot?#iefix");
      src: url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/6ea78fbd-72da-406c-bd23-556297e62ebb.eot?#iefix") format("eot"), url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/73381861-eb6a-4f7c-8c14-cd34a714f943.woff") format("woff"), url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/93adf2cf-f54c-4a73-8ec7-43fe0b2c91a1.ttf") format("truetype"), url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/a89d4dba-ce62-4aaa-8187-bea28a2b3a90.svg#a89d4dba-ce62-4aaa-8187-bea28a2b3a90") format("svg");
    }

    @font-face {
      font-family: "Courier-PS-W10";
      src: url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/efcef8d3-4e54-4965-a5f0-67f288d40c0a.eot?#iefix");
      src: url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/efcef8d3-4e54-4965-a5f0-67f288d40c0a.eot?#iefix") format("eot"), url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/2593bfe2-2f34-4218-a1e2-fde3bdc686e1.woff") format("woff"), url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/e84e67b7-d822-43f4-80a9-315fddffd712.ttf") format("truetype"), url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/7bbc8148-b9e2-49ad-bd2a-b6a8ba78efa6.svg#7bbc8148-b9e2-49ad-bd2a-b6a8ba78efa6") format("svg");
    }

    @font-face {
      font-family: "Impact-W10-2010";
      src: url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/2f6579cb-5ade-4b70-a96a-8fe9485fe73f.eot?#iefix");
      src: url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/2f6579cb-5ade-4b70-a96a-8fe9485fe73f.eot?#iefix") format("eot"), url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/1c7b5ef1-5b09-4473-8003-a974846653a7.woff") format("woff"), url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/805172a0-d718-48ac-9053-873641b3e236.ttf") format("truetype"), url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/1979f98e-b074-4385-81b0-772f28a00668.svg#1979f98e-b074-4385-81b0-772f28a00668") format("svg");
    }

    @font-face {
      font-family: "Lucida-Console-W10-0";
      src: url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/e9678295-b67a-4b01-bfb4-a357fa5dd939.eot?#iefix");
      src: url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/e9678295-b67a-4b01-bfb4-a357fa5dd939.eot?#iefix") format("eot"), url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/2c0bffef-a666-4646-a4bc-7faf1fa689f5.woff") format("woff"), url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/4696d714-e3c0-4351-9df8-2e4449d30c3d.ttf") format("truetype"), url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/936712ee-6903-4ab8-b6ad-99e7ca1721d0.svg#936712ee-6903-4ab8-b6ad-99e7ca1721d0") format("svg");
    }

    @font-face {
      font-family: "Tahoma-W10-Regular";
      src: url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/50c03b26-fd3d-4fa1-96d0-d88b72129c4f.eot?#iefix");
      src: url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/50c03b26-fd3d-4fa1-96d0-d88b72129c4f.eot?#iefix") format("eot"), url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/9ee00678-b6d7-4b4f-8448-70cfa267d36b.woff") format("woff"), url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/6861fb60-a657-44e2-92fa-86bd26cd2657.ttf") format("truetype"), url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/bf5f466c-6f51-449d-91b3-32f1f0c2b796.svg#bf5f466c-6f51-449d-91b3-32f1f0c2b796") format("svg");
    }

    @font-face {
      font-family: "Arial-W10-Black";
      src: url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/26819459-0b68-486b-ae05-2ecdbd222feb.eot?#iefix");
      src: url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/26819459-0b68-486b-ae05-2ecdbd222feb.eot?#iefix") format("eot"),
        url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/7cfb7eb0-2332-4048-a7f4-2c3fa389c3a3.woff") format("woff"),
        url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/2edafc36-cb97-4b1a-8803-a7b2e6125929.ttf") format("truetype"),
        url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/00760470-0987-4c68-844d-564282fc8ff9.svg#00760470-0987-4c68-844d-564282fc8ff9") format("svg");
    }

    /* korean */
    @font-face {
      font-family: "FBBlueGothicL";
      src: url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/902109a4-ea36-40b3-a234-05747684a610.eot?#iefix");
      src: url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/902109a4-ea36-40b3-a234-05747684a610.eot?#iefix") format("eot"), url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/1a10c1c0-157a-4f57-96c1-1af2fc242e06.woff") format("woff"), url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/31b02a27-3c41-4593-bfbf-84702627c9fd.ttf") format("truetype"), url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/e4aaa0ee-fcdd-4558-9d8e-be75c6b8c417.svg#e4aaa0ee-fcdd-4558-9d8e-be75c6b8c417") format("svg");
    }

    @font-face {
      font-family: "FBChamBlue";
      src: url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/3df084ed-47e4-4347-91c7-44d290c2c093.eot?#iefix");
      src: url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/3df084ed-47e4-4347-91c7-44d290c2c093.eot?#iefix") format("eot"), url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/75c0e570-e4e0-4e86-a031-1ade01e5b3f5.woff") format("woff"), url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/b9eacc4f-ef9b-4ff5-bf09-ffca8edc43e2.ttf") format("truetype"), url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/12333ad5-3ac0-4a7d-b109-6d8c8101515a.svg#12333ad5-3ac0-4a7d-b109-6d8c8101515a") format("svg");
    }

    @font-face {
      font-family: "FBGreen";
      src: url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/89bbab6a-1291-4439-9384-bc7e36aae8e0.eot?#iefix");
      src: url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/89bbab6a-1291-4439-9384-bc7e36aae8e0.eot?#iefix") format("eot"), url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/399c1f00-ff31-4f87-868c-bcbfcabcdd51.woff") format("woff"), url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/ad6cc8e5-052c-4d6c-ab7b-66b2f70edb5f.ttf") format("truetype"), url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/0045c511-e366-4e81-bd42-131808ac750f.svg#0045c511-e366-4e81-bd42-131808ac750f") format("svg");
    }

    @font-face {
      font-family: "FBNeoGothic";
      src: url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/3323e5a2-cefa-4887-9de9-9fd287987664.eot?#iefix");
      src: url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/3323e5a2-cefa-4887-9de9-9fd287987664.eot?#iefix") format("eot"), url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/c52a9d59-984f-45b4-bfd7-6f6af54eb89f.woff") format("woff"), url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/58e6245d-754a-4a05-9bd2-25a655e31640.ttf") format("truetype"), url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/29c28905-cc56-4077-86f5-917ad8e34c1c.svg#29c28905-cc56-4077-86f5-917ad8e34c1c") format("svg");
    }

    @font-face {
      font-family: "FBPlum";
      src: url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/837a8a7f-bb60-42ed-a5bc-c9368cc1ecba.eot?#iefix");
      src: url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/837a8a7f-bb60-42ed-a5bc-c9368cc1ecba.eot?#iefix") format("eot"), url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/101fd386-ed60-4ed9-8ac2-80d0492347ac.woff") format("woff"), url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/5539addf-e60b-4fba-a356-cbab8abd16c6.ttf") format("truetype"), url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/6329eea0-a953-45d7-9074-6f0594e27df7.svg#6329eea0-a953-45d7-9074-6f0594e27df7") format("svg");
    }

    @font-face {
      font-family: "NanumGothic-Regular";
      src: url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/open-source/nanum-gothic-regular.eot?#iefix");
      src: url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/open-source/nanum-gothic-regular.eot?#iefix") format("eot"),
        url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/open-source/nanum-gothic-regular.woff") format("woff"),
        url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/open-source/nanum-gothic-regular.ttf") format("truetype");
    }

    @font-face {
      font-family: "BM-HANNA";
      src: url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/open-source/bm-hanna.eot?#iefix");
      src: url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/open-source/bm-hanna.eot?#iefix") format("eot"),
        url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/open-source/bm-hanna.woff") format("woff"),
        url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/open-source/bm-hanna.ttf") format("truetype");
    }

    /* arabic */
    @font-face {
      font-family: "AhmedLTW20-OutlineRegul";
      src: url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/3b019dda-5201-4a96-ab40-449f0785e578.eot?#iefix");
      src: url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/3b019dda-5201-4a96-ab40-449f0785e578.eot?#iefix") format("eot"),
        url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/bc9495bd-5edc-4c5b-be28-dfb45e27e688.woff") format("woff"),
        url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/bcaca41c-2840-4aef-9fb4-f0c66589e9cd.ttf") format("truetype"),
        url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/b5000ada-6fa4-4aae-8c7e-6e6abda2be56.svg#b5000ada-6fa4-4aae-8c7e-6e6abda2be56") format("svg");
    }

    @font-face {
      font-family: "Arian-LT-W20-Light";
      src: url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/3e151393-e605-418c-8050-fb734e7b64b3.eot?#iefix");
      src: url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/3e151393-e605-418c-8050-fb734e7b64b3.eot?#iefix") format("eot"), url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/c977bad6-94c3-457c-9771-d8e0017a33c2.woff") format("woff"), url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/a7bdf7c7-b425-4dae-b583-9f86ec510f9f.ttf") format("truetype"), url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/da80aad9-b3bc-417c-963f-b9033a872ec1.svg#da80aad9-b3bc-417c-963f-b9033a872ec1") format("svg");
    }

    @font-face {
      font-family: "Arian-LT-W20-Regular";
      src: url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/64ef878b-c690-447b-a020-f4491b2de821.eot?#iefix");
      src: url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/64ef878b-c690-447b-a020-f4491b2de821.eot?#iefix") format("eot"), url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/c257a373-9919-458c-b7b2-83850775058d.woff") format("woff"), url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/afa67eb7-2358-4d1d-bdcd-da0436f5cfb2.ttf") format("truetype"), url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/57ba934e-c7af-4166-a22c-48eaf65f26bb.svg#57ba934e-c7af-4166-a22c-48eaf65f26bb") format("svg");
    }

    @font-face {
      font-family: "Janna-LT-W20-Regular";
      src: url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/a9c47d30-0eca-434f-8082-ac141c4c97b3.eot?#iefix");
      src: url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/a9c47d30-0eca-434f-8082-ac141c4c97b3.eot?#iefix") format("eot"), url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/26c24286-5aab-4747-81b9-54330e77fb14.woff") format("woff"), url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/9c4c7fff-85b6-442f-9726-af5f49d49e53.ttf") format("truetype"), url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/a24f53ee-e15e-4931-89a3-b6f17fbfcd72.svg#a24f53ee-e15e-4931-89a3-b6f17fbfcd72") format("svg");
    }

    @font-face {
      font-family: "Kufi-LT-W20-Regular";
      src: url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/774ebfa2-6ac0-48cf-8c15-1394d7bab265.eot?#iefix");
      src: url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/774ebfa2-6ac0-48cf-8c15-1394d7bab265.eot?#iefix") format("eot"), url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/e0e311dc-5674-493c-8c19-f0a0a1422837.woff") format("woff"), url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/96829dee-2b11-4389-a3b6-35eabd423234.ttf") format("truetype"), url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/e7b93a7e-e623-4628-809c-4ae5df08148b.svg#e7b93a7e-e623-4628-809c-4ae5df08148b") format("svg");
    }

    @font-face {
      font-family: "HelveticaNeueLTW20-Ligh";
      src: url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/ab7f002d-5f09-4a65-b7ad-9f01ec5bfaf0.eot?#iefix");
      src: url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/ab7f002d-5f09-4a65-b7ad-9f01ec5bfaf0.eot?#iefix") format("eot"), url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/b8ee7e47-48e4-4b5b-8a74-cf02708fb54a.woff") format("woff"), url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/074fa346-a8c5-4331-9d93-7a06123af067.ttf") format("truetype"), url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/e953f49c-15a9-4394-97dd-a3f230e12e0b.svg#e953f49c-15a9-4394-97dd-a3f230e12e0b") format("svg");
    }

    @font-face {
      font-family: "Midan-W20";
      src: url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/4d56c718-5282-4923-867f-763af2fa8575.eot?#iefix");
      src: url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/4d56c718-5282-4923-867f-763af2fa8575.eot?#iefix") format("eot"), url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/be87d34b-77db-4286-87d9-d2964115c6c5.woff") format("woff"), url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/539016b8-1f78-4507-b542-c9e55b269ac6.ttf") format("truetype"), url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/3b8c2857-0ab3-4ea6-90bc-9928bf53340c.svg#3b8c2857-0ab3-4ea6-90bc-9928bf53340c") format("svg");
    }

    @font-face {
      font-family: "TanseekModernW20-Light";
      src: url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/73d94c9b-15bd-4af9-bda1-c5ee4ed1c409.eot?#iefix");
      src: url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/73d94c9b-15bd-4af9-bda1-c5ee4ed1c409.eot?#iefix") format("eot"), url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/688d77ff-8c0d-4baf-ac95-f45c034e1caf.woff") format("woff"), url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/177fb002-a619-4d25-8a79-af7d0e9a1ee6.ttf") format("truetype"), url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/4fa09e39-beb9-46ca-bfcc-f9518ab4a9bd.svg#4fa09e39-beb9-46ca-bfcc-f9518ab4a9bd") format("svg");
    }

    @font-face {
      font-family: "DINNextLTW23-UltraLight";
      src: url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/b4a0535b-3a89-43bd-b3fb-b6619d0b0a09.eot?#iefix");
      src: url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/b4a0535b-3a89-43bd-b3fb-b6619d0b0a09.eot?#iefix") format("eot"), url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/63b0b154-64e6-4846-be80-b601f3ce9b28.woff") format("woff"), url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/f3f08f13-d46f-4589-90ac-70c0a21cd061.ttf") format("truetype"), url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/10870395-15e4-40b0-8f7e-5ffab7195224.svg#10870395-15e4-40b0-8f7e-5ffab7195224") format("svg");
    }

    @font-face {
      font-family: "ArabicTypesettingW23-Re";
      src: url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/28b4ce0b-3a59-4f7c-ab3f-909d63dd0351.eot?#iefix");
      src: url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/28b4ce0b-3a59-4f7c-ab3f-909d63dd0351.eot?#iefix") format("eot"), url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/5a32e87e-0f32-4971-a43f-4ec453bc74ca.woff") format("woff"), url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/50f516bf-5611-4134-9556-2131aaea2b78.ttf") format("truetype"), url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/8db4ca73-82e1-4259-afcd-c1f15b14f62b.svg#8db4ca73-82e1-4259-afcd-c1f15b14f62b") format("svg");
    }

    @font-face {
      font-family: "CoHeadlineW23-ArabicBol";
      src: url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/925638f2-9ed0-4f9a-a78d-61d6eddd2b54.eot?#iefix");
      src: url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/925638f2-9ed0-4f9a-a78d-61d6eddd2b54.eot?#iefix") format("eot"), url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/b15a6899-c706-46a9-8c2b-a80b62ba301b.woff") format("woff"), url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/36ad9b9b-5fb9-49e6-ad2d-1daafccea16a.ttf") format("truetype"), url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/05e393a0-71df-4e02-b8ba-6f68f2b23b92.svg#05e393a0-71df-4e02-b8ba-6f68f2b23b92") format("svg");
    }

    @font-face {
      font-family: 'Amiri';
      src: url('//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/open-source/amiri-regular.eot');
      src: url('//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/open-source/amiri-regular.eot?#iefix') format('embedded-opentype'),
        url('//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/open-source/amiri-regular.woff') format('woff'),
        url('//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/open-source/amiri-regular.ttf') format('truetype');
    }

    @font-face {
      font-family: 'Droid-Naskh';
      src: url('//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/open-source/droidnaskh-regular.eot');
      src: url('//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/open-source/droidnaskh-regular.eot?#iefix') format('embedded-opentype'),
        url('//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/open-source/droidnaskh-regular.woff') format('woff'),
        url('//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/open-source/droidnaskh-regular.ttf') format('truetype');
    }

    /* hebrew */
    @font-face {
      font-family: "Adler-W26-Regular";
      src: url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/8fa9b915-180f-4b72-aee7-22fd066c52c6.eot?#iefix");
      src: url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/8fa9b915-180f-4b72-aee7-22fd066c52c6.eot?#iefix") format("eot"), url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/fcb3f76f-a112-479e-ab7f-ab1c2be906c9.woff") format("woff"), url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/ceda4e97-a631-4986-8cab-709e1775be33.ttf") format("truetype"), url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/353c7faf-0d58-475b-8caa-f1d863e0cf1d.svg#353c7faf-0d58-475b-8caa-f1d863e0cf1d") format("svg");
    }

    @font-face {
      font-family: "Frank-Ruhl-W26-Regular";
      src: url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/90882399-52f1-42a9-986b-c2c49d3fb409.eot?#iefix");
      src: url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/90882399-52f1-42a9-986b-c2c49d3fb409.eot?#iefix") format("eot"), url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/0e834425-e268-4b38-b5a8-f24b8632d6ae.woff") format("woff"), url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/cb5aceab-5dbf-4c09-b650-7c9d526cc117.ttf") format("truetype"), url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/850e45c9-2003-49fa-8e3f-c7dfd6579acc.svg#850e45c9-2003-49fa-8e3f-c7dfd6579acc") format("svg");
    }

    @font-face {
      font-family: "Haim-Arukeem-W26-Medium";
      src: url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/6de8df0c-23af-49b9-9578-42db4c756d2d.eot?#iefix");
      src: url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/6de8df0c-23af-49b9-9578-42db4c756d2d.eot?#iefix") format("eot"), url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/f70c24b0-d6be-4d04-99cd-46efc41d00b4.woff") format("woff"), url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/2dd64ac4-7c3a-47fb-acdb-063b811c93d5.ttf") format("truetype"), url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/a7ab1444-5d94-4474-9d31-86df47d8d5c1.svg#a7ab1444-5d94-4474-9d31-86df47d8d5c1") format("svg");
    }

    @font-face {
      font-family: "Miriam-W26-Medium";
      src: url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/acfa87dd-5042-40e1-87e9-12e4a559269f.eot?#iefix");
      src: url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/acfa87dd-5042-40e1-87e9-12e4a559269f.eot?#iefix") format("eot"), url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/21aeb0a3-3309-4415-818b-36f94e2a1a3a.woff") format("woff"), url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/c5acaffd-7553-42ff-a693-8b9be795b4b3.ttf") format("truetype"), url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/dd50d8fb-6769-469f-8bfa-9caed8e6df18.svg#dd50d8fb-6769-469f-8bfa-9caed8e6df18") format("svg");
    }

    @font-face {
      font-family: "Nekudot-W26-Bold";
      src: url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/c0a57107-844c-4847-afc6-00f3cb3c4d5f.eot?#iefix");
      src: url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/c0a57107-844c-4847-afc6-00f3cb3c4d5f.eot?#iefix") format("eot"), url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/c28b65cd-9544-42f1-9ffc-d6ffa544e6fb.woff") format("woff"), url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/9aa74607-c9af-4c4b-9a3f-fc76488dca25.ttf") format("truetype"), url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/00381de4-f82a-4939-b8e1-1bbde51ac4ce.svg#00381de4-f82a-4939-b8e1-1bbde51ac4ce") format("svg");
    }

    @font-face {
      font-family: "Gulash-W26-Regular";
      src: url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/7c672276-1d07-4ff2-8b1d-3245af0dc5cc.eot?#iefix");
      src: url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/7c672276-1d07-4ff2-8b1d-3245af0dc5cc.eot?#iefix") format("eot"), url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/64f53eeb-1d5e-493c-aa3b-aa8e2c066320.woff") format("woff"), url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/7e32a874-81bc-4d38-87aa-ff626ce5a400.ttf") format("truetype"), url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/857d7efc-7a9c-457d-8aa5-44f0992e6441.svg#857d7efc-7a9c-457d-8aa5-44f0992e6441") format("svg");
    }

    @font-face {
      font-family: "Shabazi-W26-Bold";
      src: url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/dc7f3c57-fb2d-4656-9224-ef9f1c88477e.eot?#iefix");
      src: url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/dc7f3c57-fb2d-4656-9224-ef9f1c88477e.eot?#iefix") format("eot"), url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/09048cb1-f6a6-4b44-9d96-6d20013ef7e8.woff") format("woff"), url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/fec4486e-254a-4cb4-b1a0-859cf2190792.ttf") format("truetype"), url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/b25da79b-ff9a-486e-bf4f-2893c47da939.svg#b25da79b-ff9a-486e-bf4f-2893c47da939") format("svg");
    }

    @font-face {
      font-family: "Chips-W26-Normal";
      src: url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/aa157336-ffa1-476e-9a72-e9f516e87ca3.eot?#iefix");
      src: url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/aa157336-ffa1-476e-9a72-e9f516e87ca3.eot?#iefix") format("eot"), url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/e526922d-4fe2-4e4d-834d-6b62ebd244da.woff") format("woff"), url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/03e7eb16-072f-4c53-b299-08535bff2421.ttf") format("truetype"), url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/b21a0ec6-8efb-40de-99f1-20a11d482401.svg#b21a0ec6-8efb-40de-99f1-20a11d482401") format("svg");
    }

    @font-face {
      font-family: "Alef-Regular";
      src: url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/open-source/alef-regular.eot?#iefix");
      src: url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/open-source/alef-regular.eot?#iefix") format("eot"), url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/open-source/alef-regular.woff") format("woff"), url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/open-source/alef-regular.ttf") format("truetype");
    }

    @font-face {
      font-family: "OpenSansHebrewCondensed-Regular";
      src: url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/open-source/opensans-hebrew-condensed-regular.eot?#iefix");
      src: url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/open-source/opensans-hebrew-condensed-regular.eot?#iefix") format("eot"),
        url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/open-source/opensans-hebrew-condensed-regular.woff") format("woff"),
        url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/open-source/opensans-hebrew-condensed-regular.ttf") format("truetype");
    }

    @font-face {
      font-family: 'almoni-dl-aaa-300';
      font-weight: 300;
      /*(light)*/
      src: url('//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/open-source/almoni-dl-aaa-300.eot');
      src: url('//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/open-source/almoni-dl-aaa-300.eot?#iefix') format('embedded-opentype'),
        url('//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/open-source/almoni-dl-aaa-300.woff') format('woff'),
        url('//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/open-source/almoni-dl-aaa-300.ttf') format('truetype');
    }

    @font-face {
      font-family: 'almoni-dl-aaa-400';
      font-weight: 400;
      /*(regular)*/
      font-style: normal;
      src: url('//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/open-source/almoni-dl-aaa-400.eot');
      src: url('//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/open-source/almoni-dl-aaa-400.eot?#iefix') format('embedded-opentype'),
        url('//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/open-source/almoni-dl-aaa-400.woff') format('woff'),
        url('//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/open-source/almoni-dl-aaa-400.ttf') format('truetype');
    }

    @font-face {
      font-family: 'almoni-dl-aaa-700';
      src: url('//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/open-source/almoni-dl-aaa-700.eot');
      src: url('//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/open-source/almoni-dl-aaa-700.eot?#iefix') format('embedded-opentype'),
        url('//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/open-source/almoni-dl-aaa-700.woff') format('woff'),
        url('//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/open-source/almoni-dl-aaa-700.ttf') format('truetype');
    }

    @font-face {
      font-family: 'asimon-aaa-400';
      src: url('//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/open-source/asimon-aaa-400.eot');
      src: url('//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/open-source/asimon-aaa-400.eot?#iefix') format('embedded-opentype'),
        url('//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/open-source/asimon-aaa-400.woff') format('woff'),
        url('//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/open-source/asimon-aaa-400.ttf') format('truetype');
    }

    @font-face {
      font-family: 'atlas-aaa-500';
      src: url('//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/open-source/atlas-aaa-500.eot');
      src: url('//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/open-source/atlas-aaa-500.eot?#iefix') format('embedded-opentype'),
        url('//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/open-source/atlas-aaa-500.woff') format('woff'),
        url('//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/open-source/atlas-aaa-500.ttf') format('truetype');
    }

    @font-face {
      font-family: 'mixtape-aaa-400';
      src: url('//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/open-source/mixtape-aaa-400.eot');
      src: url('//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/open-source/mixtape-aaa-400.eot?#iefix') format('embedded-opentype'),
        url('//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/open-source/mixtape-aaa-400.woff') format('woff'),
        url('//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/open-source/mixtape-aaa-400.ttf') format('truetype');
    }

    @font-face {
      font-family: 'museum-aaa-400';
      src: url('//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/open-source/museum-aaa-400.eot');
      src: url('//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/open-source/museum-aaa-400.eot?#iefix') format('embedded-opentype'),
        url('//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/open-source/museum-aaa-400.woff') format('woff'),
        url('//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/open-source/museum-aaa-400.ttf') format('truetype');
    }

    @font-face {
      font-family: 'omes-aaa-400';
      src: url('//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/open-source/omes-aaa-400.eot');
      src: url('//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/open-source/omes-aaa-400.eot?#iefix') format('embedded-opentype'),
        url('//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/open-source/omes-aaa-400.woff') format('woff'),
        url('//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/open-source/omes-aaa-400.ttf') format('truetype');
    }

    @font-face {
      font-family: 'MeodedPashut-oeregular';
      src: url('//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/open-source/meodedpashut_oeregular.eot');
      src: url('//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/open-source/meodedpashut_oeregular.eot?#iefix') format('embedded-opentype'),
        url('//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/open-source/meodedpashut_oeregular.woff') format('woff'),
        url('//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/open-source/meodedpashut_oeregular.ttf') format('truetype'),
        url("//static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/meodedpashut_oeregular.svg#meodedpashut_oeregular") format("svg");
    }

    /* This fonts are from google fonts, We added them so we can configure the weights */

    /** Roboto Thin**/

    @font-face {
      font-family: "Roboto-Thin";
      src: url("//fonts.gstatic.com/s/roboto/v18/hNdh1kLam5Qu9t6-swGJgPesZW2xOQ-xsNqO47m55DA.eot?#iefix");
      src: url("//fonts.gstatic.com/s/roboto/v18/hNdh1kLam5Qu9t6-swGJgPesZW2xOQ-xsNqO47m55DA.eot?#iefix") format("eot"),
        url("//fonts.gstatic.com/s/roboto/v18/e7MeVAyvogMqFwwl61PKhPesZW2xOQ-xsNqO47m55DA.woff2") format("woff2"),
        url("//fonts.gstatic.com/s/roboto/v18/idLYXfFa1c7oAPILDl4z0fesZW2xOQ-xsNqO47m55DA.woff") format("woff"),
        url("//fonts.gstatic.com/s/roboto/v18/BhNUF0UvSiDyKi5GMZK0cPesZW2xOQ-xsNqO47m55DA.ttf") format("truetype"),
        url("//fonts.gstatic.com/l/font?kit=Rd0cKaNHVPp3zNwTc2cJ6fesZW2xOQ-xsNqO47m55DA&skey=5473b731ec7fc9c1&v=v18#Roboto") format("svg");
    }

    @font-face {
      font-family: "Roboto-Thin";
      font-weight: 700;
      src: url("//fonts.gstatic.com/s/roboto/v18/3KAd02OzFSDbt78HTOt2og.eot?#iefix");
      src: url("//fonts.gstatic.com/s/roboto/v18/3KAd02OzFSDbt78HTOt2og.eot?#iefix") format("eot"),
        url("//fonts.gstatic.com/s/roboto/v18/fIKu7GwZTy_12XzG_jt8eA.woff2") format("woff2"),
        url("//fonts.gstatic.com/s/roboto/v18/Xyjz-jNkfiYuJf8UC3Lizw.woff") format("woff"),
        url("//fonts.gstatic.com/s/roboto/v18/5M21SdFLkD52QavfmHs6cA.ttf") format("truetype"),
        url("//fonts.gstatic.com/l/font?kit=1w8PsahvVyy4URc6MP8jWQ&skey=a0a0114a1dcab3ac&v=v18#Roboto") format("svg");
    }

    @font-face {
      font-family: "Roboto-Thin";
      font-style: italic;
      src: url("//fonts.gstatic.com/s/roboto/v18/dzxs_VxZUhdM2mEBkNa8slQlYEbsez9cZjKsNMjLOwM.eot?#iefix");
      src: url("//fonts.gstatic.com/s/roboto/v18/dzxs_VxZUhdM2mEBkNa8slQlYEbsez9cZjKsNMjLOwM.eot?#iefix") format("eot"),
        url("//fonts.gstatic.com/s/roboto/v18/dzxs_VxZUhdM2mEBkNa8svk_vArhqVIZ0nv9q090hN8.woff2") format("woff2"),
        url("//fonts.gstatic.com/s/roboto/v18/dzxs_VxZUhdM2mEBkNa8shsxEYwM7FgeyaSgU71cLG0.woff") format("woff"),
        url("//fonts.gstatic.com/s/roboto/v18/dzxs_VxZUhdM2mEBkNa8si3USBnSvpkopQaUR-2r7iU.ttf") format("truetype"),
        url("//fonts.gstatic.com/l/font?kit=dzxs_VxZUhdM2mEBkNa8sqWUboTb-jS2tyCOQMtm97g&skey=8f53aa2e7deadc4a&v=v18#Roboto") format("svg");
    }

    @font-face {
      font-family: "Roboto-Thin";
      font-weight: 700;
      font-style: italic;
      src: url("//fonts.gstatic.com/s/roboto/v18/87ImaWi619lMX9BhLChOt_esZW2xOQ-xsNqO47m55DA.eot?#iefix");
      src: url("//fonts.gstatic.com/s/roboto/v18/87ImaWi619lMX9BhLChOt_esZW2xOQ-xsNqO47m55DA.eot?#iefix") format("eot"),
        url("//fonts.gstatic.com/s/roboto/v18/vSzulfKSK0LLjjfeaxcREvesZW2xOQ-xsNqO47m55DA.woff2") format("woff2"),
        url("//fonts.gstatic.com/s/roboto/v18/dFWsweFqlD8ExfyN7Gh_GPesZW2xOQ-xsNqO47m55DA.woff") format("woff"),
        url("//fonts.gstatic.com/s/roboto/v18/OKegwhKhBNN-dhuHI27Hy_esZW2xOQ-xsNqO47m55DA.ttf") format("truetype"),
        url("//fonts.gstatic.com/l/font?kit=uIFaDMJQtos_JDdGgbxITvesZW2xOQ-xsNqO47m55DA&skey=c608c610063635f9&v=v18#Roboto") format("svg");
    }


    /** Roboto Bold**/

    @font-face {
      font-family: "Roboto-Bold";
      src: url("//fonts.gstatic.com/s/roboto/v18/97uahxiqZRoncBaCEI3aW_Y6323mHUZFJMgTvxaG2iE.eot?#iefix");
      src: url("//fonts.gstatic.com/s/roboto/v18/97uahxiqZRoncBaCEI3aW_Y6323mHUZFJMgTvxaG2iE.eot?#iefix") format("eot"),
        url("//fonts.gstatic.com/s/roboto/v18/97uahxiqZRoncBaCEI3aW1tXRa8TVwTICgirnJhmVJw.woff2") format("woff2"),
        url("//fonts.gstatic.com/s/roboto/v18/97uahxiqZRoncBaCEI3aWz8E0i7KZn-EPnyo3HZu7kw.woff") format("woff"),
        url("//fonts.gstatic.com/s/roboto/v18/97uahxiqZRoncBaCEI3aW6CWcynf_cDxXwCLxiixG1c.ttf") format("truetype"),
        url("//fonts.gstatic.com/l/font?kit=97uahxiqZRoncBaCEI3aW5bd9NUM7myrQQz30yPaGQ4&skey=c06e7213f788649e&v=v18#Roboto") format("svg");
    }

    @font-face {
      font-family: "Roboto-Bold";
      font-weight: 700;
      src: url("//fonts.gstatic.com/s/roboto/v18/9_7S_tWeGDh5Pq3u05RVkvY6323mHUZFJMgTvxaG2iE.eot?#iefix");
      src: url("//fonts.gstatic.com/s/roboto/v18/9_7S_tWeGDh5Pq3u05RVkvY6323mHUZFJMgTvxaG2iE.eot?#iefix") format("eot"),
        url("//fonts.gstatic.com/s/roboto/v18/9_7S_tWeGDh5Pq3u05RVkltXRa8TVwTICgirnJhmVJw.woff2") format("woff2"),
        url("//fonts.gstatic.com/s/roboto/v18/9_7S_tWeGDh5Pq3u05RVkj8E0i7KZn-EPnyo3HZu7kw.woff") format("woff"),
        url("//fonts.gstatic.com/s/roboto/v18/9_7S_tWeGDh5Pq3u05RVkqCWcynf_cDxXwCLxiixG1c.ttf") format("truetype"),
        url("//fonts.gstatic.com/l/font?kit=9_7S_tWeGDh5Pq3u05RVkpbd9NUM7myrQQz30yPaGQ4&skey=934406f772f9777d&v=v18#Roboto") format("svg");
    }

    @font-face {
      font-family: "Roboto-Bold";
      font-style: italic;
      src: url("//fonts.gstatic.com/s/roboto/v18/t6Nd4cfPRhZP44Q5QAjcC-ZiE7IA0Up7-VwGqa0iGVY.eot?#iefix");
      src: url("//fonts.gstatic.com/s/roboto/v18/t6Nd4cfPRhZP44Q5QAjcC-ZiE7IA0Up7-VwGqa0iGVY.eot?#iefix") format("eot"),
        url("//fonts.gstatic.com/s/roboto/v18/t6Nd4cfPRhZP44Q5QAjcC6g5eI2G47JWe0-AuFtD150.woff2") format("woff2"),
        url("//fonts.gstatic.com/s/roboto/v18/t6Nd4cfPRhZP44Q5QAjcC9Ih4imgI8P11RFo6YPCPC0.woff") format("woff"),
        url("//fonts.gstatic.com/s/roboto/v18/t6Nd4cfPRhZP44Q5QAjcC102b4v3fUxqf9CZJ1qUoIA.ttf") format("truetype"),
        url("//fonts.gstatic.com/l/font?kit=t6Nd4cfPRhZP44Q5QAjcC5S_ZaL0arjVp2tkn2-HJhM&skey=dd030d266f3beccc&v=v18#Roboto") format("svg");
    }

    @font-face {
      font-family: "Roboto-Bold";
      font-weight: 700;
      font-style: italic;
      src: url("//fonts.gstatic.com/s/roboto/v18/bmC0pGMXrhphrZJmniIZpeZiE7IA0Up7-VwGqa0iGVY.eot?#iefix");
      src: url("//fonts.gstatic.com/s/roboto/v18/bmC0pGMXrhphrZJmniIZpeZiE7IA0Up7-VwGqa0iGVY.eot?#iefix") format("eot"),
        url("//fonts.gstatic.com/s/roboto/v18/bmC0pGMXrhphrZJmniIZpag5eI2G47JWe0-AuFtD150.woff2") format("woff2"),
        url("//fonts.gstatic.com/s/roboto/v18/bmC0pGMXrhphrZJmniIZpdIh4imgI8P11RFo6YPCPC0.woff") format("woff"),
        url("//fonts.gstatic.com/s/roboto/v18/bmC0pGMXrhphrZJmniIZpV02b4v3fUxqf9CZJ1qUoIA.ttf") format("truetype"),
        url("//fonts.gstatic.com/l/font?kit=bmC0pGMXrhphrZJmniIZpZS_ZaL0arjVp2tkn2-HJhM&skey=b80be3241fe40325&v=v18#Roboto") format("svg");
    }

    /** WorkSans-ExtraLight**/

    @font-face {
      font-family: "WorkSans-ExtraLight";
      src: url("//fonts.gstatic.com/s/worksans/v3/u_mYNr_qYP37m7vgvmIYZ6lSqKUsDpiXlwfj-ZM2w_A.eot?#iefix");
      src: url("//fonts.gstatic.com/s/worksans/v3/u_mYNr_qYP37m7vgvmIYZ6lSqKUsDpiXlwfj-ZM2w_A.eot.eot?#iefix") format("eot"),
        url("//fonts.gstatic.com/s/worksans/v3/u_mYNr_qYP37m7vgvmIYZxUOjZSKWg4xBWp_C_qQx0o.woff2") format("woff2"),
        url("//fonts.gstatic.com/s/worksans/v3/u_mYNr_qYP37m7vgvmIYZxa1RVmPjeKy21_GQJaLlJI.woff") format("woff"),
        url("//fonts.gstatic.com/s/worksans/v3/u_mYNr_qYP37m7vgvmIYZ9qQynqKV_9Plp7mupa0S4g.ttf") format("truetype"),
        url("//fonts.gstatic.com/l/font?kit=u_mYNr_qYP37m7vgvmIYZ91LKoZ82bBu2f46DhHcs3c&skey=7c020d2757de915d&v=v3#WorkSans") format("svg");
    }


    @font-face {
      font-family: "WorkSans-ExtraLight";
      font-weight: 700;
      src: url("//fonts.gstatic.com/s/worksans/v3/FD_Udbezj8EHXbdsqLUpl6lSqKUsDpiXlwfj-ZM2w_A.eot?#iefix");
      src: url("//fonts.gstatic.com/s/worksans/v3/FD_Udbezj8EHXbdsqLUpl6lSqKUsDpiXlwfj-ZM2w_A.eot?#iefix") format("eot"),
        url("//fonts.gstatic.com/s/worksans/v3/FD_Udbezj8EHXbdsqLUplxUOjZSKWg4xBWp_C_qQx0o.woff2") format("woff2"),
        url("//fonts.gstatic.com/s/worksans/v3/FD_Udbezj8EHXbdsqLUplxa1RVmPjeKy21_GQJaLlJI.woff") format("woff"),
        url("//fonts.gstatic.com/s/worksans/v3/FD_Udbezj8EHXbdsqLUpl9qQynqKV_9Plp7mupa0S4g.ttf") format("truetype"),
        url("//fonts.gstatic.com/l/font?kit=FD_Udbezj8EHXbdsqLUpl91LKoZ82bBu2f46DhHcs3c&skey=ebac65da87d8d365&v=v3#WorkSans") format("svg");
    }

    /** WorkSans-SemiBold**/

    @font-face {
      font-family: "WorkSans-SemiBold";
      src: url("//fonts.gstatic.com/s/worksans/v3/z9rX03Xuz9ZNHTMg1_ghGalSqKUsDpiXlwfj-ZM2w_A.eot?#iefix");
      src: url("//fonts.gstatic.com/s/worksans/v3/z9rX03Xuz9ZNHTMg1_ghGalSqKUsDpiXlwfj-ZM2w_A.eot?#iefix") format("eot"),
        url("//fonts.gstatic.com/s/worksans/v3/z9rX03Xuz9ZNHTMg1_ghGRUOjZSKWg4xBWp_C_qQx0o.woff2") format("woff2"),
        url("//fonts.gstatic.com/s/worksans/v3/z9rX03Xuz9ZNHTMg1_ghGRa1RVmPjeKy21_GQJaLlJI.woff") format("woff"),
        url("//fonts.gstatic.com/s/worksans/v3/z9rX03Xuz9ZNHTMg1_ghGdqQynqKV_9Plp7mupa0S4g.ttf") format("truetype"),
        url("//fonts.gstatic.com/l/font?kit=z9rX03Xuz9ZNHTMg1_ghGd1LKoZ82bBu2f46DhHcs3c&skey=d84f72eaa49bc5a2&v=v3#WorkSans") format("svg");
    }


    @font-face {
      font-family: "WorkSans-SemiBold";
      font-weight: 700;
      src: url("//fonts.gstatic.com/s/worksans/v3/4udXuXg54JlPEP5iKO5AmalSqKUsDpiXlwfj-ZM2w_A.eot?#iefix");
      src: url("//fonts.gstatic.com/s/worksans/v3/4udXuXg54JlPEP5iKO5AmalSqKUsDpiXlwfj-ZM2w_A.eot?#iefix") format("eot"),
        url("//fonts.gstatic.com/s/worksans/v3/4udXuXg54JlPEP5iKO5AmRUOjZSKWg4xBWp_C_qQx0o.woff2") format("woff2"),
        url("//fonts.gstatic.com/s/worksans/v3/4udXuXg54JlPEP5iKO5AmRa1RVmPjeKy21_GQJaLlJI.woff") format("woff"),
        url("//fonts.gstatic.com/s/worksans/v3/4udXuXg54JlPEP5iKO5AmdqQynqKV_9Plp7mupa0S4g.ttf") format("truetype"),
        url("//fonts.gstatic.com/l/font?kit=4udXuXg54JlPEP5iKO5Amd1LKoZ82bBu2f46DhHcs3c&skey=f1df08d30998b725&v=v3#WorkSans") format("svg");
    }


    /* Poppins-ExtraLight */

    @font-face {
      font-family: "Poppins-ExtraLight";
      src: url("//fonts.gstatic.com/s/poppins/v5/h3r77AwDsldr1E_2g4qqGFQlYEbsez9cZjKsNMjLOwM.eot?#iefix");
      src: url("//fonts.gstatic.com/s/poppins/v5/h3r77AwDsldr1E_2g4qqGFQlYEbsez9cZjKsNMjLOwM.eot?#iefix") format("eot"),
        url("//fonts.gstatic.com/s/poppins/v5/h3r77AwDsldr1E_2g4qqGPk_vArhqVIZ0nv9q090hN8.woff2") format("woff2"),
        url("//fonts.gstatic.com/s/poppins/v5/h3r77AwDsldr1E_2g4qqGBsxEYwM7FgeyaSgU71cLG0.woff") format("woff"),
        url("//fonts.gstatic.com/s/poppins/v5/h3r77AwDsldr1E_2g4qqGC3USBnSvpkopQaUR-2r7iU.ttf") format("truetype"),
        url("//fonts.gstatic.com/l/font?kit=h3r77AwDsldr1E_2g4qqGKWUboTb-jS2tyCOQMtm97g&skey=1bdc08fe61c3cc9e&v=v5#Poppins") format("svg");
    }


    @font-face {
      font-family: "Poppins-ExtraLight";
      font-weight: 700;
      src: url("//fonts.gstatic.com/s/poppins/v5/2NBlOVek2HIa2EeuV_3Cbw.eot?#iefix");
      src: url("//fonts.gstatic.com/s/poppins/v5/2NBlOVek2HIa2EeuV_3Cbw.eot?#iefix") format("eot"),
        url("//fonts.gstatic.com/s/poppins/v5/rijG6I_IOXJjsH07UEo2mw.woff2") format("woff2"),
        url("//fonts.gstatic.com/s/poppins/v5/p0A1C4_gK5NzKtuGSwNurQ.woff") format("woff"),
        url("//fonts.gstatic.com/s/poppins/v5/rATt6MpBkxjRr3sy5fMEDg.ttf") format("truetype"),
        url("//fonts.gstatic.com/l/font?kit=dvQ6luzB0ViWP07p6fisSw&skey=87759fb096548f6d&v=v5#Poppins") format("svg");
    }

    @font-face {
      font-family: "Poppins-ExtraLight";
      font-style: italic;
      src: url("//fonts.gstatic.com/s/poppins/v5/-GlaWpWcSgdVagNuOGuFKalSqKUsDpiXlwfj-ZM2w_A.eot?#iefix");
      src: url("//fonts.gstatic.com/s/poppins/v5/-GlaWpWcSgdVagNuOGuFKalSqKUsDpiXlwfj-ZM2w_A.eot?#iefix") format("eot"),
        url("//fonts.gstatic.com/s/poppins/v5/-GlaWpWcSgdVagNuOGuFKRUOjZSKWg4xBWp_C_qQx0o.woff2") format("woff2"),
        url("//fonts.gstatic.com/s/poppins/v5/-GlaWpWcSgdVagNuOGuFKRa1RVmPjeKy21_GQJaLlJI.woff") format("woff"),
        url("//fonts.gstatic.com/s/poppins/v5/-GlaWpWcSgdVagNuOGuFKdqQynqKV_9Plp7mupa0S4g.ttf") format("truetype"),
        url("//fonts.gstatic.com/l/font?kit=-GlaWpWcSgdVagNuOGuFKd1LKoZ82bBu2f46DhHcs3c&skey=e6f64e60fb8d9268&v=v5#Poppins") format("svg");
    }

    @font-face {
      font-family: "Poppins-ExtraLight";
      font-weight: 700;
      font-style: italic;
      src: url("//fonts.gstatic.com/s/poppins/v5/Fm41upUVp7KTKUZhL0PfQfY6323mHUZFJMgTvxaG2iE.eot?#iefix");
      src: url("//fonts.gstatic.com/s/poppins/v5/Fm41upUVp7KTKUZhL0PfQfY6323mHUZFJMgTvxaG2iE.eot?#iefix") format("eot"),
        url("//fonts.gstatic.com/s/poppins/v5/Fm41upUVp7KTKUZhL0PfQVtXRa8TVwTICgirnJhmVJw.woff2") format("woff2"),
        url("//fonts.gstatic.com/s/poppins/v5/Fm41upUVp7KTKUZhL0PfQT8E0i7KZn-EPnyo3HZu7kw.woff") format("woff"),
        url("//fonts.gstatic.com/s/poppins/v5/Fm41upUVp7KTKUZhL0PfQaCWcynf_cDxXwCLxiixG1c.ttf") format("truetype"),
        url("//fonts.gstatic.com/l/font?kit=Fm41upUVp7KTKUZhL0PfQZbd9NUM7myrQQz30yPaGQ4&skey=f21d6e783fa43c88&v=v5#Poppins") format("svg");
    }

    /* Poppins-SemiBold */

    @font-face {
      font-family: "Poppins-SemiBold";
      src: url("//fonts.gstatic.com/s/poppins/v5/9VWMTeb5jtXkNoTv949NpVQlYEbsez9cZjKsNMjLOwM.eot?#iefix");
      src: url("//fonts.gstatic.com/s/poppins/v5/9VWMTeb5jtXkNoTv949NpVQlYEbsez9cZjKsNMjLOwM.eot?#iefix") format("eot"),
        url("//fonts.gstatic.com/s/poppins/v5/9VWMTeb5jtXkNoTv949Npfk_vArhqVIZ0nv9q090hN8.woff2") format("woff2"),
        url("//fonts.gstatic.com/s/poppins/v5/9VWMTeb5jtXkNoTv949NpRsxEYwM7FgeyaSgU71cLG0.woff") format("woff"),
        url("//fonts.gstatic.com/s/poppins/v5/9VWMTeb5jtXkNoTv949NpS3USBnSvpkopQaUR-2r7iU.ttf") format("truetype"),
        url("//fonts.gstatic.com/l/font?kit=9VWMTeb5jtXkNoTv949NpaWUboTb-jS2tyCOQMtm97g&skey=ce7ef9d62ca89319&v=v5#Poppins") format("svg");
    }


    @font-face {
      font-family: "Poppins-SemiBold";
      font-weight: 700;
      src: url("//fonts.gstatic.com/s/poppins/v5/aDjpMND83pDErGXlVEr-SVQlYEbsez9cZjKsNMjLOwM.eot?#iefix");
      src: url("//fonts.gstatic.com/s/poppins/v5/aDjpMND83pDErGXlVEr-SVQlYEbsez9cZjKsNMjLOwM.eot?#iefix") format("eot"),
        url("//fonts.gstatic.com/s/poppins/v5/aDjpMND83pDErGXlVEr-Sfk_vArhqVIZ0nv9q090hN8.woff2") format("woff2"),
        url("//fonts.gstatic.com/s/poppins/v5/aDjpMND83pDErGXlVEr-SRsxEYwM7FgeyaSgU71cLG0.woff") format("woff"),
        url("//fonts.gstatic.com/s/poppins/v5/aDjpMND83pDErGXlVEr-SS3USBnSvpkopQaUR-2r7iU.ttf") format("truetype"),
        url("//fonts.gstatic.com/l/font?kit=aDjpMND83pDErGXlVEr-SaWUboTb-jS2tyCOQMtm97g&skey=cea76fe63715a67a&v=v5#Poppins") format("svg");
    }

    @font-face {
      font-family: "Poppins-SemiBold";
      font-style: italic;
      src: url("//fonts.gstatic.com/s/poppins/v5/RbebACOccNN-5ixkDIVLjalSqKUsDpiXlwfj-ZM2w_A.eot?#iefix");
      src: url("//fonts.gstatic.com/s/poppins/v5/RbebACOccNN-5ixkDIVLjalSqKUsDpiXlwfj-ZM2w_A.eot?#iefix") format("eot"),
        url("//fonts.gstatic.com/s/poppins/v5/RbebACOccNN-5ixkDIVLjRUOjZSKWg4xBWp_C_qQx0o.woff2") format("woff2"),
        url("//fonts.gstatic.com/s/poppins/v5/RbebACOccNN-5ixkDIVLjRa1RVmPjeKy21_GQJaLlJI.woff") format("woff"),
        url("//fonts.gstatic.com/s/poppins/v5/RbebACOccNN-5ixkDIVLjdqQynqKV_9Plp7mupa0S4g.ttf") format("truetype"),
        url("//fonts.gstatic.com/l/font?kit=RbebACOccNN-5ixkDIVLjd1LKoZ82bBu2f46DhHcs3c&skey=7fbc556774b13ef0&v=v5#Poppins") format("svg");
    }

    @font-face {
      font-family: "Poppins-SemiBold";
      font-weight: 700;
      font-style: italic;
      src: url("//fonts.gstatic.com/s/poppins/v5/c4FPK8_hIFKoX59qcGwdCqlSqKUsDpiXlwfj-ZM2w_A.eot?#iefix");
      src: url("//fonts.gstatic.com/s/poppins/v5/c4FPK8_hIFKoX59qcGwdCqlSqKUsDpiXlwfj-ZM2w_A.eot?#iefix") format("eot"),
        url("//fonts.gstatic.com/s/poppins/v5/c4FPK8_hIFKoX59qcGwdChUOjZSKWg4xBWp_C_qQx0o.woff2") format("woff2"),
        url("//fonts.gstatic.com/s/poppins/v5/c4FPK8_hIFKoX59qcGwdCha1RVmPjeKy21_GQJaLlJI.woff") format("woff"),
        url("//fonts.gstatic.com/s/poppins/v5/c4FPK8_hIFKoX59qcGwdCtqQynqKV_9Plp7mupa0S4g.ttf") format("truetype"),
        url("//fonts.gstatic.com/l/font?kit=c4FPK8_hIFKoX59qcGwdCt1LKoZ82bBu2f46DhHcs3c&skey=29c3bd833a54ba8c&v=v5#Poppins") format("svg");
    }

    /* Barlow-ExtraLight */

    @font-face {
      font-family: "Barlow-ExtraLight";
      src: url("//fonts.gstatic.com/s/barlow/v1/51v0xj5VPw1cLYHNhfd8NPY6323mHUZFJMgTvxaG2iE.eot?#iefix");
      src: url("//fonts.gstatic.com/s/barlow/v1/51v0xj5VPw1cLYHNhfd8NPY6323mHUZFJMgTvxaG2iE.eot?#iefix") format("eot"),
        url("//fonts.gstatic.com/s/barlow/v1/51v0xj5VPw1cLYHNhfd8NFtXRa8TVwTICgirnJhmVJw.woff2") format("woff2"),
        url("//fonts.gstatic.com/s/barlow/v1/51v0xj5VPw1cLYHNhfd8ND8E0i7KZn-EPnyo3HZu7kw.woff") format("woff"),
        url("//fonts.gstatic.com/s/barlow/v1/51v0xj5VPw1cLYHNhfd8NKCWcynf_cDxXwCLxiixG1c.ttf") format("truetype"),
        url("//fonts.gstatic.com/l/font?kit=51v0xj5VPw1cLYHNhfd8NJbd9NUM7myrQQz30yPaGQ4&skey=e8c74abecf94633e&v=v1#Barlow") format("svg");
    }


    @font-face {
      font-family: "Barlow-ExtraLight";
      font-weight: 700;
      src: url("//fonts.gstatic.com/s/barlow/ /SWLcTgmyMR1GjdNjixEPiQ.eot?#iefix");
      src: url("//fonts.gstatic.com/s/barlow/v1/SWLcTgmyMR1GjdNjixEPiQ.eot?#iefix") format("eot"),
        url("//fonts.gstatic.com/s/barlow/v1/2woyxyDnPU0v4IiqYU9D1g.woff2") format("woff2"),
        url("//fonts.gstatic.com/s/barlow/v1/-HJgNsTwx9qXGSxqew62RQ.woff") format("woff"),
        url("//fonts.gstatic.com/s/barlow/v1/qoExc9IJQUjYXhlVZNNLgg.ttf") format("truetype"),
        url("//fonts.gstatic.com/l/font?kit=lYNHuF7-w_9_po3MKWoAsw&skey=32d7acf8757dbad0&v=v1#Barlow") format("svg");
    }

    @font-face {
      font-family: "Barlow-ExtraLight";
      font-style: italic;
      src: url("//fonts.gstatic.com/s/barlow/v1/14AxwKgJhKIO-YYUP_KtZeZiE7IA0Up7-VwGqa0iGVY.eot?#iefix");
      src: url("//fonts.gstatic.com/s/barlow/v1/14AxwKgJhKIO-YYUP_KtZeZiE7IA0Up7-VwGqa0iGVY.eot?#iefix") format("eot"),
        url("//fonts.gstatic.com/s/barlow/v1/14AxwKgJhKIO-YYUP_KtZag5eI2G47JWe0-AuFtD150.woff2") format("woff2"),
        url("//fonts.gstatic.com/s/barlow/v1/14AxwKgJhKIO-YYUP_KtZdIh4imgI8P11RFo6YPCPC0.woff") format("woff"),
        url("//fonts.gstatic.com/s/barlow/v1/14AxwKgJhKIO-YYUP_KtZV02b4v3fUxqf9CZJ1qUoIA.ttf") format("truetype"),
        url("//fonts.gstatic.com/l/font?kit=14AxwKgJhKIO-YYUP_KtZZS_ZaL0arjVp2tkn2-HJhM&skey=9a40589dc4645af7&v=v1#Barlow") format("svg");
    }

    @font-face {
      font-family: "Barlow-ExtraLight";
      font-weight: 700;
      font-style: italic;
      src: url("//fonts.gstatic.com/s/barlow/v1/8p49G4DnpMZgB5cGwNFgJvesZW2xOQ-xsNqO47m55DA.eot?#iefix");
      src: url("//fonts.gstatic.com/s/barlow/v1/8p49G4DnpMZgB5cGwNFgJvesZW2xOQ-xsNqO47m55DA.eot?#iefix") format("eot"),
        url("//fonts.gstatic.com/s/barlow/v1/cdbGxfKO8gdkBd5U5TuXqPesZW2xOQ-xsNqO47m55DA.woff2") format("woff2"),
        url("//fonts.gstatic.com/s/barlow/v1/W1XpMGU0WrpbCawEdG1FM_esZW2xOQ-xsNqO47m55DA.woff") format("woff"),
        url("//fonts.gstatic.com/s/barlow/v1/_lIpJP17FZmSeklpAeOdnvesZW2xOQ-xsNqO47m55DA.ttf") format("truetype"),
        url("//fonts.gstatic.com/l/font?kit=MGR_1eUqfxpTc1K5cbfqWvesZW2xOQ-xsNqO47m55DA&skey=ae428d300932fbee&v=v1#Barlow") format("svg");
    }

    /* Barlow-Medium */

    @font-face {
      font-family: "Barlow-Medium";
      src: url("//fonts.gstatic.com/s/barlow/v1/ZqlneECqpsd9SXlmAsD2E_Y6323mHUZFJMgTvxaG2iE.eot?#iefix");
      src: url("//fonts.gstatic.com/s/barlow/v1/ZqlneECqpsd9SXlmAsD2E_Y6323mHUZFJMgTvxaG2iE.eot?#iefix") format("eot"),
        url("//fonts.gstatic.com/s/barlow/v1/ZqlneECqpsd9SXlmAsD2E1tXRa8TVwTICgirnJhmVJw.woff2") format("woff2"),
        url("//fonts.gstatic.com/s/barlow/v1/ZqlneECqpsd9SXlmAsD2Ez8E0i7KZn-EPnyo3HZu7kw.woff") format("woff"),
        url("//fonts.gstatic.com/s/barlow/v1/ZqlneECqpsd9SXlmAsD2E6CWcynf_cDxXwCLxiixG1c.ttf") format("truetype"),
        url("//fonts.gstatic.com/l/font?kit=ZqlneECqpsd9SXlmAsD2E5bd9NUM7myrQQz30yPaGQ4&skey=4c8d0d0b13516148&v=v1#Barlow") format("svg");
    }

    @font-face {
      font-family: "Barlow-Medium";
      font-weight: 700;
      src: url("//fonts.gstatic.com/s/barlow/v1/yS165lxqGuDghyUMXeu6xfY6323mHUZFJMgTvxaG2iE.eot?#iefix");
      src: url("//fonts.gstatic.com/s/barlow/v1/yS165lxqGuDghyUMXeu6xfY6323mHUZFJMgTvxaG2iE.eot?#iefix") format("eot"),
        url("//fonts.gstatic.com/s/barlow/v1/yS165lxqGuDghyUMXeu6xVtXRa8TVwTICgirnJhmVJw.woff2") format("woff2"),
        url("//fonts.gstatic.com/s/barlow/v1/yS165lxqGuDghyUMXeu6xT8E0i7KZn-EPnyo3HZu7kw.woff") format("woff"),
        url("//fonts.gstatic.com/s/barlow/v1/yS165lxqGuDghyUMXeu6xaCWcynf_cDxXwCLxiixG1c.ttf") format("truetype"),
        url("//fonts.gstatic.com/l/font?kit=yS165lxqGuDghyUMXeu6xZbd9NUM7myrQQz30yPaGQ4&skey=f60e73b1bbf362f3&v=v1#Barlow") format("svg");
    }

    @font-face {
      font-family: "Barlow-Medium";
      font-style: italic;
      src: url("//fonts.gstatic.com/s/barlow/v1/xJLokI-F3wr7NRWXgS0pZ-ZiE7IA0Up7-VwGqa0iGVY.eot?#iefix");
      src: url("//fonts.gstatic.com/s/barlow/v1/xJLokI-F3wr7NRWXgS0pZ-ZiE7IA0Up7-VwGqa0iGVY.eot?#iefix") format("eot"),
        url("//fonts.gstatic.com/s/barlow/v1/xJLokI-F3wr7NRWXgS0pZ6g5eI2G47JWe0-AuFtD150.woff2") format("woff2"),
        url("//fonts.gstatic.com/s/barlow/v1/xJLokI-F3wr7NRWXgS0pZ9Ih4imgI8P11RFo6YPCPC0.woff") format("woff"),
        url("//fonts.gstatic.com/s/barlow/v1/xJLokI-F3wr7NRWXgS0pZ102b4v3fUxqf9CZJ1qUoIA.ttf") format("truetype"),
        url("//fonts.gstatic.com/l/font?kit=xJLokI-F3wr7NRWXgS0pZ5S_ZaL0arjVp2tkn2-HJhM&skey=989d87b0113009a2&v=v1#Barlow") format("svg");
    }

    @font-face {
      font-family: "Barlow-Medium";
      font-weight: 700;
      font-style: italic;
      src: url("//fonts.gstatic.com/s/barlow/v1/hw7DQwyFvE7wFOFzpow4xuZiE7IA0Up7-VwGqa0iGVY.eot?#iefix");
      src: url("//fonts.gstatic.com/s/barlow/v1/hw7DQwyFvE7wFOFzpow4xuZiE7IA0Up7-VwGqa0iGVY.eot?#iefix") format("eot"),
        url("//fonts.gstatic.com/s/barlow/v1/hw7DQwyFvE7wFOFzpow4xqg5eI2G47JWe0-AuFtD150.woff2") format("woff2"),
        url("//fonts.gstatic.com/s/barlow/v1/hw7DQwyFvE7wFOFzpow4xtIh4imgI8P11RFo6YPCPC0.woff") format("woff"),
        url("//fonts.gstatic.com/s/barlow/v1/hw7DQwyFvE7wFOFzpow4xl02b4v3fUxqf9CZJ1qUoIA.ttf") format("truetype"),
        url("//fonts.gstatic.com/l/font?kit=hw7DQwyFvE7wFOFzpow4xpS_ZaL0arjVp2tkn2-HJhM&skey=25c93348b6ec64d8&v=v1#Barlow") format("svg");
    }

    /** Oswald-ExtraLight **/

    @font-face {
      font-family: "Oswald-ExtraLight";
      src: url("//fonts.gstatic.com/s/oswald/v16/GwZ_PiN1Aind9Eyjp868E_Y6323mHUZFJMgTvxaG2iE.eot?#iefix");
      src: url("//fonts.gstatic.com/s/oswald/v16/GwZ_PiN1Aind9Eyjp868E_Y6323mHUZFJMgTvxaG2iE.eot?#iefix") format("eot"),
        url("//fonts.gstatic.com/s/oswald/v16/GwZ_PiN1Aind9Eyjp868E1tXRa8TVwTICgirnJhmVJw.woff2") format("woff2"),
        url("//fonts.gstatic.com/s/oswald/v16/GwZ_PiN1Aind9Eyjp868Ez8E0i7KZn-EPnyo3HZu7kw.woff") format("woff"),
        url("//fonts.gstatic.com/s/oswald/v16/GwZ_PiN1Aind9Eyjp868E6CWcynf_cDxXwCLxiixG1c.ttf") format("truetype"),
        url("//fonts.gstatic.com/l/font?kit=GwZ_PiN1Aind9Eyjp868E5bd9NUM7myrQQz30yPaGQ4&skey=bb2021537ac38f74&v=v16#Oswald") format("svg");
    }


    @font-face {
      font-family: "Oswald-ExtraLight";
      font-weight: 700;
      src: url("//fonts.gstatic.com/s/oswald/v16/aBQVVQvnHeKhkWtMdHDrBA.eot?#iefix");
      src: url("//fonts.gstatic.com/s/oswald/v16/aBQVVQvnHeKhkWtMdHDrBA.eot?#iefix") format("eot"),
        url("//fonts.gstatic.com/s/oswald/v16/RqRF4AQrkUh3ft98NHH2mA.woff2") format("woff2"),
        url("//fonts.gstatic.com/s/oswald/v16/PyqsDANUgLi2UsdO-d4iZQ.woff") format("woff"),
        url("//fonts.gstatic.com/s/oswald/v16/AWM5wXtMJeRP-AcRTgT4qQ.ttf") format("truetype"),
        url("//fonts.gstatic.com/l/font?kit=fxOl0NmPFyuGF72xEC-uaw&skey=653237e53512d0de&v=v16#Oswald") format("svg");
    }

    /** Oswald-Medium **/

    @font-face {
      font-family: "Oswald-Medium";
      src: url("//fonts.gstatic.com/s/oswald/v16/cgaIrkaP9Empe8_PwXbajPY6323mHUZFJMgTvxaG2iE.eot?#iefix");
      src: url("//fonts.gstatic.com/s/oswald/v16/cgaIrkaP9Empe8_PwXbajPY6323mHUZFJMgTvxaG2iE.eot?#iefix") format("eot"),
        url("//fonts.gstatic.com/s/oswald/v16/cgaIrkaP9Empe8_PwXbajFtXRa8TVwTICgirnJhmVJw.woff2") format("woff2"),
        url("//fonts.gstatic.com/s/oswald/v16/cgaIrkaP9Empe8_PwXbajD8E0i7KZn-EPnyo3HZu7kw.woff") format("woff"),
        url("//fonts.gstatic.com/s/oswald/v16/cgaIrkaP9Empe8_PwXbajKCWcynf_cDxXwCLxiixG1c.ttf") format("truetype"),
        url("//fonts.gstatic.com/l/font?kit=cgaIrkaP9Empe8_PwXbajJbd9NUM7myrQQz30yPaGQ4&skey=4b4aed5676a34753&v=v16#Oswald") format("svg");
    }


    @font-face {
      font-family: "Oswald-Medium";
      font-weight: 700;
      src: url("//fonts.gstatic.com/s/oswald/v16/dI-qzxlKVQA6TUC5RKSb3_Y6323mHUZFJMgTvxaG2iE.eot?#iefix");
      src: url("//fonts.gstatic.com/s/oswald/v16/dI-qzxlKVQA6TUC5RKSb3_Y6323mHUZFJMgTvxaG2iE.eot?#iefix") format("eot"),
        url("//fonts.gstatic.com/s/oswald/v16/dI-qzxlKVQA6TUC5RKSb31tXRa8TVwTICgirnJhmVJw.woff2") format("woff2"),
        url("//fonts.gstatic.com/s/oswald/v16/dI-qzxlKVQA6TUC5RKSb3z8E0i7KZn-EPnyo3HZu7kw.woff") format("woff"),
        url("//fonts.gstatic.com/s/oswald/v16/dI-qzxlKVQA6TUC5RKSb36CWcynf_cDxXwCLxiixG1c.ttf") format("truetype"),
        url("//fonts.gstatic.com/l/font?kit=dI-qzxlKVQA6TUC5RKSb35bd9NUM7myrQQz30yPaGQ4&skey=23b674776eaa386b&v=v16#Oswald") format("svg");
    }


    /* CormorantGaramond-Light */

    @font-face {
      font-family: "CormorantGaramond-Light";
      src: url("//fonts.gstatic.com/s/cormorantgaramond/v5/iEjm9hVxcattz37Y8gZwVbBfiualwvFStSOsxMaA9Xk.eot?#iefix");
      src: url("//fonts.gstatic.com/s/cormorantgaramond/v5/iEjm9hVxcattz37Y8gZwVbBfiualwvFStSOsxMaA9Xk.eot?#iefix") format("eot"),
        url("//fonts.gstatic.com/s/cormorantgaramond/v5/iEjm9hVxcattz37Y8gZwVSNMxVe3WGf96EDbCaLCBKE.woff2") format("woff2"),
        url("//fonts.gstatic.com/s/cormorantgaramond/v5/iEjm9hVxcattz37Y8gZwVergGQquJ_f3dxTxEJk8ZKM.woff") format("woff"),
        url("//fonts.gstatic.com/s/cormorantgaramond/v5/iEjm9hVxcattz37Y8gZwVXYC8UqYVZ_Us7w6eA7MdZE.ttf") format("truetype"),
        url("//fonts.gstatic.com/l/font?kit=iEjm9hVxcattz37Y8gZwVQItn0uMP03uW4URT5yNJ1A&skey=4f9ed6f80d6d2fa0&v=v5#CormorantGaramond") format("svg");
    }

    @font-face {
      font-family: "CormorantGaramond-Light";
      font-weight: 700;
      src: url("//fonts.gstatic.com/s/cormorantgaramond/v5/iEjm9hVxcattz37Y8gZwVazXwemCpFqMs4XqHkBvwCw.eot?#iefix");
      src: url("//fonts.gstatic.com/s/cormorantgaramond/v5/iEjm9hVxcattz37Y8gZwVazXwemCpFqMs4XqHkBvwCw.eot?#iefix") format("eot"),
        url("//fonts.gstatic.com/s/cormorantgaramond/v5/iEjm9hVxcattz37Y8gZwVXP87xhFzkXvitf5EbJwljk.woff2") format("woff2"),
        url("//fonts.gstatic.com/s/cormorantgaramond/v5/iEjm9hVxcattz37Y8gZwVebEnH4R5m1MLXJyCi0BC78.woff") format("woff"),
        url("//fonts.gstatic.com/s/cormorantgaramond/v5/iEjm9hVxcattz37Y8gZwVXXouEby_DX2rsmMI51GE6g.ttf") format("truetype"),
        url("//fonts.gstatic.com/l/font?kit=iEjm9hVxcattz37Y8gZwVagJAOahgqhI62iGMRZxLgA&skey=4b255bdbddcd870c&v=v5#CormorantGaramond") format("svg");
    }

    @font-face {
      font-family: "CormorantGaramond-Light";
      font-style: italic;
      src: url("//fonts.gstatic.com/s/cormorantgaramond/v5/zuqx3k1yUEl3Eavo-ZPEAo6DDMtmvJ_B6GwP8DnSGlc.eot?#iefix");
      src: url("//fonts.gstatic.com/s/cormorantgaramond/v5/zuqx3k1yUEl3Eavo-ZPEAo6DDMtmvJ_B6GwP8DnSGlc.eot?#iefix") format("eot"),
        url("//fonts.gstatic.com/s/cormorantgaramond/v5/zuqx3k1yUEl3Eavo-ZPEAhjqQayVfgmnRFwqYqN-Dis.woff2") format("woff2"),
        url("//fonts.gstatic.com/s/cormorantgaramond/v5/zuqx3k1yUEl3Eavo-ZPEAhNmD6bOwmI0fiYv_Ehe03s.woff") format("woff"),
        url("//fonts.gstatic.com/s/cormorantgaramond/v5/zuqx3k1yUEl3Eavo-ZPEAoUBHI3ylZGW9V5Fst4kWps.ttf") format("truetype"),
        url("//fonts.gstatic.com/l/font?kit=zuqx3k1yUEl3Eavo-ZPEAm2yWSqasHTScCEp__B8ZG8&skey=5a7e0a432eb14fbf&v=v5#CormorantGaramond") format("svg");
    }

    @font-face {
      font-family: "CormorantGaramond-Light";
      font-weight: 700;
      font-style: italic;
      src: url("//fonts.gstatic.com/s/cormorantgaramond/v5/zuqx3k1yUEl3Eavo-ZPEApsqEKC2V_AfCL0idPKEkUg.eot?#iefix");
      src: url("//fonts.gstatic.com/s/cormorantgaramond/v5/zuqx3k1yUEl3Eavo-ZPEApsqEKC2V_AfCL0idPKEkUg.eot?#iefix") format("eot"),
        url("//fonts.gstatic.com/s/cormorantgaramond/v5/zuqx3k1yUEl3Eavo-ZPEAjp2K1CgsixPpkXulytJk5A.woff2") format("woff2"),
        url("//fonts.gstatic.com/s/cormorantgaramond/v5/zuqx3k1yUEl3Eavo-ZPEAhX141arjC0UgpdoDjjeeVk.woff") format("woff"),
        url("//fonts.gstatic.com/s/cormorantgaramond/v5/zuqx3k1yUEl3Eavo-ZPEAs_ggsKlhsDnft5n268BUmY.ttf") format("truetype"),
        url("//fonts.gstatic.com/l/font?kit=zuqx3k1yUEl3Eavo-ZPEAhPsKNRAg-HYnzxRksprgig&skey=a646f7df62b0db07&v=v5#CormorantGaramond") format("svg");
    }

    /* CormorantGaramond-SemiBold */

    @font-face {
      font-family: "CormorantGaramond-SemiBold";
      src: url("//fonts.gstatic.com/s/cormorantgaramond/v5/iEjm9hVxcattz37Y8gZwVbVz384BzEPyLpTPeKMcRYU.eot?#iefix");
      src: url("//fonts.gstatic.com/s/cormorantgaramond/v5/iEjm9hVxcattz37Y8gZwVbVz384BzEPyLpTPeKMcRYU.eot?#iefix") format("eot"),
        url("//fonts.gstatic.com/s/cormorantgaramond/v5/iEjm9hVxcattz37Y8gZwVVBiiiFZ1SMKhjDurTuPCI4.woff2") format("woff2"),
        url("//fonts.gstatic.com/s/cormorantgaramond/v5/iEjm9hVxcattz37Y8gZwVbaDr2DD9WOmTsY4M3S93hU.woff") format("woff"),
        url("//fonts.gstatic.com/s/cormorantgaramond/v5/iEjm9hVxcattz37Y8gZwVeXPWxx9SjLSy6MMhsXoUuc.ttf") format("truetype"),
        url("//fonts.gstatic.com/l/font?kit=iEjm9hVxcattz37Y8gZwVYO0Qi8fZokth4SQK1TX-KE&skey=e242efc8b3e67934&v=v5#CormorantGaramond") format("svg");
    }

    @font-face {
      font-family: "CormorantGaramond-SemiBold";
      font-weight: 700;
      src: url("//fonts.gstatic.com/s/cormorantgaramond/v5/iEjm9hVxcattz37Y8gZwVdloJvQ3p58mlwV6TqgfA7M.eot?#iefix");
      src: url("//fonts.gstatic.com/s/cormorantgaramond/v5/iEjm9hVxcattz37Y8gZwVdloJvQ3p58mlwV6TqgfA7M.eot?#iefix") format("eot"),
        url("//fonts.gstatic.com/s/cormorantgaramond/v5/iEjm9hVxcattz37Y8gZwVVYUpUlN7yzNHgIMH66hSOI.woff2") format("woff2"),
        url("//fonts.gstatic.com/s/cormorantgaramond/v5/iEjm9hVxcattz37Y8gZwVQIBIRsdTZvmhTwexVJEOCE.woff") format("woff"),
        url("//fonts.gstatic.com/s/cormorantgaramond/v5/iEjm9hVxcattz37Y8gZwVaDtWBNc4GTxi9CQqfNpXFo.ttf") format("truetype"),
        url("//fonts.gstatic.com/l/font?kit=iEjm9hVxcattz37Y8gZwVb6HL2eGTYrO_zDfBqjt1MM&skey=3181ffd829cb74e8&v=v5#CormorantGaramond") format("svg");
    }

    @font-face {
      font-family: "CormorantGaramond-SemiBold";
      font-style: italic;
      src: url("//fonts.gstatic.com/s/cormorantgaramond/v5/zuqx3k1yUEl3Eavo-ZPEAsYoq9jXh7-YfoVtEE3lLX0.eot?#iefix");
      src: url("//fonts.gstatic.com/s/cormorantgaramond/v5/zuqx3k1yUEl3Eavo-ZPEAsYoq9jXh7-YfoVtEE3lLX0.eot?#iefix") format("eot"),
        url("//fonts.gstatic.com/s/cormorantgaramond/v5/zuqx3k1yUEl3Eavo-ZPEAoNfVaeyxI1fRb3LCiKLt24.woff2") format("woff2"),
        url("//fonts.gstatic.com/s/cormorantgaramond/v5/zuqx3k1yUEl3Eavo-ZPEAggc7XrJygm306pFqSI3kLU.woff") format("woff"),
        url("//fonts.gstatic.com/s/cormorantgaramond/v5/zuqx3k1yUEl3Eavo-ZPEAtfqxAW0UHKApQgkrKaDcls.ttf") format("truetype"),
        url("//fonts.gstatic.com/l/font?kit=zuqx3k1yUEl3Eavo-ZPEAie-e-6qXDi5M9WaClpJAY0&skey=d056cd8e7bb95ad3&v=v5#CormorantGaramond") format("svg");
    }

    @font-face {
      font-family: "CormorantGaramond-SemiBold";
      font-weight: 700;
      font-style: italic;
      src: url("//fonts.gstatic.com/s/cormorantgaramond/v5/zuqx3k1yUEl3Eavo-ZPEAgFSqQyBKGFf_cwATpqgiXs.eot?#iefix");
      src: url("//fonts.gstatic.com/s/cormorantgaramond/v5/zuqx3k1yUEl3Eavo-ZPEAgFSqQyBKGFf_cwATpqgiXs.eot?#iefix") format("eot"),
        url("//fonts.gstatic.com/s/cormorantgaramond/v5/zuqx3k1yUEl3Eavo-ZPEAoWXH9gdibkBmfnjU2pcZcs.woff2") format("woff2"),
        url("//fonts.gstatic.com/s/cormorantgaramond/v5/zuqx3k1yUEl3Eavo-ZPEAsgX3acpz6D8mJOI1MynZxQ.woff") format("woff"),
        url("//fonts.gstatic.com/s/cormorantgaramond/v5/zuqx3k1yUEl3Eavo-ZPEAr5MZRoaqvZ37XiNNIvX6C0.ttf") format("truetype"),
        url("//fonts.gstatic.com/l/font?kit=zuqx3k1yUEl3Eavo-ZPEAh8ZTJ6KlBZ1Ts_1-_3vUrI&skey=f5baa31c9854d669&v=v5#CormorantGaramond") format("svg");
    }

    /* PlayfairDisplay-Bold */

    @font-face {
      font-family: "PlayfairDisplay-Bold";
      src: url("//fonts.gstatic.com/s/playfairdisplay/v13/UC3ZEjagJi85gF9qFaBgIPmrPH9ZsFqytabBz9sgz_Q.eot?#iefix");
      src: url("//fonts.gstatic.com/s/playfairdisplay/v13/UC3ZEjagJi85gF9qFaBgIPmrPH9ZsFqytabBz9sgz_Q.eot?#iefix") format("eot"),
        url("//fonts.gstatic.com/s/playfairdisplay/v13/UC3ZEjagJi85gF9qFaBgIIWMvkC5IXg8PD2cMeMDjBI.woff2") format("woff2"),
        url("//fonts.gstatic.com/s/playfairdisplay/v13/UC3ZEjagJi85gF9qFaBgIMITpqSvb0EhPNqvdm-qG4s.woff") format("woff"),
        url("//fonts.gstatic.com/s/playfairdisplay/v13/UC3ZEjagJi85gF9qFaBgIETnlckwlsa9ycyidjAp5Kc.ttf") format("truetype"),
        url("//fonts.gstatic.com/l/font?kit=UC3ZEjagJi85gF9qFaBgIMnytsXa_r9I1moNmPEKxr4&skey=c119c2be8134ed06&v=v13#PlayfairDisplay") format("svg");
    }

    @font-face {
      font-family: "PlayfairDisplay-Bold";
      font-weight: 700;
      src: url("//fonts.gstatic.com/s/playfairdisplay/v13/UC3ZEjagJi85gF9qFaBgIPqcSpnvWCHzQNKqku5JWIY.eot?#iefix");
      src: url("//fonts.gstatic.com/s/playfairdisplay/v13/UC3ZEjagJi85gF9qFaBgIPqcSpnvWCHzQNKqku5JWIY.eot?#iefix") format("eot"),
        url("//fonts.gstatic.com/s/playfairdisplay/v13/UC3ZEjagJi85gF9qFaBgILxv9TIgpWQaRKdG-_MdlP0.woff2") format("woff2"),
        url("//fonts.gstatic.com/s/playfairdisplay/v13/UC3ZEjagJi85gF9qFaBgIIidMZaDCgb76Cj_Fd30HHc.woff") format("woff"),
        url("//fonts.gstatic.com/s/playfairdisplay/v13/UC3ZEjagJi85gF9qFaBgIBczLBIbQ3AJzFR3-m2VmLg.ttf") format("truetype"),
        url("//fonts.gstatic.com/l/font?kit=UC3ZEjagJi85gF9qFaBgIKCikRNRa47LAyIy5yIVXvc&skey=5c26bbaa7df0e616&v=v13#PlayfairDisplay") format("svg");
    }

    @font-face {
      font-family: "PlayfairDisplay-Bold";
      font-style: italic;
      src: url("//fonts.gstatic.com/s/playfairdisplay/v13/n7G4PqJvFP2Kubl0VBLDEFESDfruYL5oKOAJzNJb7ys.eot?#iefix");
      src: url("//fonts.gstatic.com/s/playfairdisplay/v13/n7G4PqJvFP2Kubl0VBLDEFESDfruYL5oKOAJzNJb7ys.eot?#iefix") format("eot"),
        url("//fonts.gstatic.com/s/playfairdisplay/v13/n7G4PqJvFP2Kubl0VBLDEPizZYmr4BUkAcTxjCN2kLE.woff2") format("woff2"),
        url("//fonts.gstatic.com/s/playfairdisplay/v13/n7G4PqJvFP2Kubl0VBLDENxHfcsPlDajrhlFKgOPuYg.woff") format("woff"),
        url("//fonts.gstatic.com/s/playfairdisplay/v13/n7G4PqJvFP2Kubl0VBLDELo34k-OXaeZF4ilAYxgJ0c.ttf") format("truetype"),
        url("//fonts.gstatic.com/l/font?kit=n7G4PqJvFP2Kubl0VBLDEK8_Qdjw54vp4QRNW69d70M&skey=a95cefd51a12ec17&v=v13#PlayfairDisplay") format("svg");
    }

    @font-face {
      font-family: "PlayfairDisplay-Bold";
      font-weight: 700;
      font-style: italic;
      src: url("//fonts.gstatic.com/s/playfairdisplay/v13/n7G4PqJvFP2Kubl0VBLDEIwnLPDplx5S8AKag-I5qXU.eot?#iefix");
      src: url("//fonts.gstatic.com/s/playfairdisplay/v13/n7G4PqJvFP2Kubl0VBLDEIwnLPDplx5S8AKag-I5qXU.eot?#iefix") format("eot"),
        url("//fonts.gstatic.com/s/playfairdisplay/v13/n7G4PqJvFP2Kubl0VBLDEA9QP145tN5qB9RQEnC5ftI.woff2") format("woff2"),
        url("//fonts.gstatic.com/s/playfairdisplay/v13/n7G4PqJvFP2Kubl0VBLDEBMHjY5M6rp_NSn2hjKJhfc.woff") format("woff"),
        url("//fonts.gstatic.com/s/playfairdisplay/v13/n7G4PqJvFP2Kubl0VBLDEEwFowWjhcb6pv3Dv1OTigc.ttf") format("truetype"),
        url("//fonts.gstatic.com/l/font?kit=n7G4PqJvFP2Kubl0VBLDEFAVE8WjwCPLYD-4C_k3wkc&skey=5aa2cfa063a6b631&v=v13#PlayfairDisplay") format("svg");
    }

    /** DancingScript-Regular **/

    @font-face {
      font-family: "DancingScript-Regular";
      src: url("//fonts.gstatic.com/s/dancingscript/v9/DK0eTGXiZjN6yA8zAEyM2T9RCsRvjGRATIRlxBzwHdg.eot?#iefix");
      src: url("//fonts.gstatic.com/s/dancingscript/v9/DK0eTGXiZjN6yA8zAEyM2T9RCsRvjGRATIRlxBzwHdg.eot?#iefix") format("eot"),
        url("//fonts.gstatic.com/s/dancingscript/v9/DK0eTGXiZjN6yA8zAEyM2RN-0beyHaEC1kqeqPFpWrs.woff2") format("woff2"),
        url("//fonts.gstatic.com/s/dancingscript/v9/DK0eTGXiZjN6yA8zAEyM2UtCETOCmz2wCdel46UOhAM.woff") format("woff"),
        url("//fonts.gstatic.com/s/dancingscript/v9/DK0eTGXiZjN6yA8zAEyM2fog-Cy6dhy5Xgu82688fSg.ttf") format("truetype"),
        url("//fonts.gstatic.com/l/font?kit=DK0eTGXiZjN6yA8zAEyM2cGf0DEE6mlqV9opp_1pRbI&skey=c89f400061e5d0a8&v=v9#DancingScript") format("svg");
    }


    @font-face {
      font-family: "DancingScript-Regular";
      font-weight: 700;
      src: url("//fonts.gstatic.com/s/dancingscript/v9/KGBfwabt0ZRLA5W1ywjowd1F__mTQJ--pRXs2EOmsg0.eot?#iefix");
      src: url("//fonts.gstatic.com/s/dancingscript/v9/KGBfwabt0ZRLA5W1ywjowd1F__mTQJ--pRXs2EOmsg0.eot?#iefix") format("eot"),
        url("//fonts.gstatic.com/s/dancingscript/v9/KGBfwabt0ZRLA5W1ywjowZR92E8gBbe58j0pHY_YhTY.woff2") format("woff2"),
        url("//fonts.gstatic.com/s/dancingscript/v9/KGBfwabt0ZRLA5W1ywjowW_WCyVccUAWDspcx_4UXqg.woff") format("woff"),
        url("//fonts.gstatic.com/s/dancingscript/v9/KGBfwabt0ZRLA5W1ywjowWfbPar0qrg-I_8uTXkQ0Sc.ttf") format("truetype"),
        url("//fonts.gstatic.com/l/font?kit=KGBfwabt0ZRLA5W1ywjowT9GhUFziu5FA7LV6roWAHM&skey=4fd71febfd48d6c&v=v9#DancingScript") format("svg");
    }


    /* Raleway-SemiBold */

    @font-face {
      font-family: "Raleway-SemiBold";
      src: url("//fonts.gstatic.com/s/raleway/v12/STBOO2waD2LpX45SXYjQBVQlYEbsez9cZjKsNMjLOwM.eot?#iefix");
      src: url("//fonts.gstatic.com/s/raleway/v12/STBOO2waD2LpX45SXYjQBVQlYEbsez9cZjKsNMjLOwM.eot?#iefix") format("eot"),
        url("//fonts.gstatic.com/s/raleway/v12/STBOO2waD2LpX45SXYjQBfk_vArhqVIZ0nv9q090hN8.woff2") format("woff2"),
        url("//fonts.gstatic.com/s/raleway/v12/STBOO2waD2LpX45SXYjQBRsxEYwM7FgeyaSgU71cLG0.woff") format("woff"),
        url("//fonts.gstatic.com/s/raleway/v12/STBOO2waD2LpX45SXYjQBS3USBnSvpkopQaUR-2r7iU.ttf") format("truetype"),
        url("//fonts.gstatic.com/l/font?kit=STBOO2waD2LpX45SXYjQBaWUboTb-jS2tyCOQMtm97g&skey=484edb0fdce88a64&v=v12#Raleway") format("svg");
    }

    @font-face {
      font-family: "Raleway-SemiBold";
      font-weight: 700;
      src: url("//fonts.gstatic.com/s/raleway/v12/WmVKXVcOuffP_qmCpFuyzVQlYEbsez9cZjKsNMjLOwM.eot?#iefix");
      src: url("//fonts.gstatic.com/s/raleway/v12/WmVKXVcOuffP_qmCpFuyzVQlYEbsez9cZjKsNMjLOwM.eot?#iefix") format("eot"),
        url("//fonts.gstatic.com/s/raleway/v12/WmVKXVcOuffP_qmCpFuyzfk_vArhqVIZ0nv9q090hN8.woff2") format("woff2"),
        url("//fonts.gstatic.com/s/raleway/v12/WmVKXVcOuffP_qmCpFuyzRsxEYwM7FgeyaSgU71cLG0.woff") format("woff"),
        url("//fonts.gstatic.com/s/raleway/v12/WmVKXVcOuffP_qmCpFuyzS3USBnSvpkopQaUR-2r7iU.ttf") format("truetype"),
        url("//fonts.gstatic.com/l/font?kit=WmVKXVcOuffP_qmCpFuyzaWUboTb-jS2tyCOQMtm97g&skey=e507c3e2b7915ad1&v=v12#Raleway") format("svg");
    }

    @font-face {
      font-family: "Raleway-SemiBold";
      font-style: italic;
      src: url("//fonts.gstatic.com/s/raleway/v12/OY22yoG8EJ3IN_muVWm29KlSqKUsDpiXlwfj-ZM2w_A.eot?#iefix");
      src: url("//fonts.gstatic.com/s/raleway/v12/OY22yoG8EJ3IN_muVWm29KlSqKUsDpiXlwfj-ZM2w_A.eot?#iefix") format("eot"),
        url("//fonts.gstatic.com/s/raleway/v12/OY22yoG8EJ3IN_muVWm29BUOjZSKWg4xBWp_C_qQx0o.woff2") format("woff2"),
        url("//fonts.gstatic.com/s/raleway/v12/OY22yoG8EJ3IN_muVWm29Ba1RVmPjeKy21_GQJaLlJI.woff") format("woff"),
        url("//fonts.gstatic.com/s/raleway/v12/OY22yoG8EJ3IN_muVWm29NqQynqKV_9Plp7mupa0S4g.ttf") format("truetype"),
        url("//fonts.gstatic.com/l/font?kit=OY22yoG8EJ3IN_muVWm29N1LKoZ82bBu2f46DhHcs3c&skey=cb4eb159e5e3db1f&v=v12#Raleway") format("svg");
    }

    @font-face {
      font-family: "Raleway-SemiBold";
      font-weight: 700;
      font-style: italic;
      src: url("//fonts.gstatic.com/s/raleway/v12/lFxvRPuGFG5ktd7P0WRwKqlSqKUsDpiXlwfj-ZM2w_A.eot?#iefix");
      src: url("//fonts.gstatic.com/s/raleway/v12/lFxvRPuGFG5ktd7P0WRwKqlSqKUsDpiXlwfj-ZM2w_A.eot?#iefix") format("eot"),
        url("//fonts.gstatic.com/s/raleway/v12/lFxvRPuGFG5ktd7P0WRwKhUOjZSKWg4xBWp_C_qQx0o.woff2") format("woff2"),
        url("//fonts.gstatic.com/s/raleway/v12/lFxvRPuGFG5ktd7P0WRwKha1RVmPjeKy21_GQJaLlJI.woff") format("woff"),
        url("//fonts.gstatic.com/s/raleway/v12/lFxvRPuGFG5ktd7P0WRwKtqQynqKV_9Plp7mupa0S4g.ttf") format("truetype"),
        url("//fonts.gstatic.com/l/font?kit=lFxvRPuGFG5ktd7P0WRwKt1LKoZ82bBu2f46DhHcs3c&skey=9ecf9384a6d643b6&v=v12#Raleway") format("svg");
    }

    /* Lato-Light */

    @font-face {
      font-family: "Lato-Light";
      src: url("//fonts.gstatic.com/s/lato/v14/KDRyPGFdQxeFClMSxPKQ3w.eot?#iefix");
      src: url("//fonts.gstatic.com/s/lato/v14/KDRyPGFdQxeFClMSxPKQ3w.eot?#iefix") format("eot"),
        url("//fonts.gstatic.com/s/lato/v14/2hXzmNaFRuKTSBR9nRGO-A.woff2") format("woff2"),
        url("//fonts.gstatic.com/s/lato/v14/kU6VHbqMAZhaN_nXCmLQsQ.woff") format("woff"),
        url("//fonts.gstatic.com/s/lato/v14/BTu4SsVveqk58cdYjlaM9g.ttf") format("truetype"),
        url("//fonts.gstatic.com/l/font?kit=I5jxx2JZduMchyTN9Dgylg&skey=91f32e07d083dd3a&v=v14#Lato") format("svg");
    }

    @font-face {
      font-family: "Lato-Light";
      font-weight: 700;
      src: url("//fonts.gstatic.com/s/lato/v14/6TEmgPQ_0ZdLPE7b6hhIjQ.eot?#iefix");
      src: url("//fonts.gstatic.com/s/lato/v14/6TEmgPQ_0ZdLPE7b6hhIjQ.eot?#iefix") format("eot"),
        url("//fonts.gstatic.com/s/lato/v14/7nLfsQCzhQW_PwpkrwroYw.woff2") format("woff2"),
        url("//fonts.gstatic.com/s/lato/v14/I1Pn3gihk5vyP0Yw5GqKsQ.woff") format("woff"),
        url("//fonts.gstatic.com/s/lato/v14/zpv3sOKAbMf4wff105oLjw.ttf") format("truetype"),
        url("//fonts.gstatic.com/l/font?kit=adjMoXVaHbO08wMAF5yDsA&skey=3480a19627739c0d&v=v14#Lato") format("svg");
    }

    @font-face {
      font-family: "Lato-Light";
      font-style: italic;
      src: url("//fonts.gstatic.com/s/lato/v14/XNVd6tsqi9wmKNvnh5HNEPY6323mHUZFJMgTvxaG2iE.eot?#iefix");
      src: url("//fonts.gstatic.com/s/lato/v14/XNVd6tsqi9wmKNvnh5HNEPY6323mHUZFJMgTvxaG2iE.eot?#iefix") format("eot"),
        url("//fonts.gstatic.com/s/lato/v14/XNVd6tsqi9wmKNvnh5HNEFtXRa8TVwTICgirnJhmVJw.woff2") format("woff2"),
        url("//fonts.gstatic.com/s/lato/v14/XNVd6tsqi9wmKNvnh5HNED8E0i7KZn-EPnyo3HZu7kw.woff") format("woff"),
        url("//fonts.gstatic.com/s/lato/v14/XNVd6tsqi9wmKNvnh5HNEKCWcynf_cDxXwCLxiixG1c.ttf") format("truetype"),
        url("//fonts.gstatic.com/l/font?kit=XNVd6tsqi9wmKNvnh5HNEJbd9NUM7myrQQz30yPaGQ4&skey=8107d606b7e3d38e&v=v14#Lato") format("svg");
    }

    @font-face {
      font-family: "Lato-Light";
      font-weight: 700;
      font-style: italic;
      src: url("//fonts.gstatic.com/s/lato/v14/AcvTq8Q0lyKKNxRlL28Rn_Y6323mHUZFJMgTvxaG2iE.eot?#iefix");
      src: url("//fonts.gstatic.com/s/lato/v14/AcvTq8Q0lyKKNxRlL28Rn_Y6323mHUZFJMgTvxaG2iE.eot?#iefix") format("eot"),
        url("//fonts.gstatic.com/s/lato/v14/AcvTq8Q0lyKKNxRlL28Rn1tXRa8TVwTICgirnJhmVJw.woff2") format("woff2"),
        url("//fonts.gstatic.com/s/lato/v14/AcvTq8Q0lyKKNxRlL28Rnz8E0i7KZn-EPnyo3HZu7kw.woff") format("woff"),
        url("//fonts.gstatic.com/s/lato/v14/AcvTq8Q0lyKKNxRlL28Rn6CWcynf_cDxXwCLxiixG1c.ttf") format("truetype"),
        url("//fonts.gstatic.com/l/font?kit=AcvTq8Q0lyKKNxRlL28Rn5bd9NUM7myrQQz30yPaGQ4&skey=5334e9c0b67702e2&v=v14#Lato") format("svg");
    }

    @font-face {
      font-family: "August-Bold";
      src: url("//static.parastorage.com/services/santa-resources/resources/viewer/user-site-fonts/fonts/AugustBold/v1/augustbold-webfont.eot?#iefix");
      src: url("//static.parastorage.com/services/santa-resources/resources/viewer/user-site-fonts/fonts/AugustBold/v1/augustbold-webfont.eot?#iefix") format("eot"),
        url("//static.parastorage.com/services/santa-resources/resources/viewer/user-site-fonts/fonts/AugustBold/v1/augustbold-webfont.woff2") format("woff2"),
        url("//static.parastorage.com/services/santa-resources/resources/viewer/user-site-fonts/fonts/AugustBold/v1/augustbold-webfont.woff") format("woff"),
        url("//static.parastorage.com/services/santa-resources/resources/viewer/user-site-fonts/fonts/AugustBold/v1/augustbold-webfont.ttf") format("truetype"),
        url("//static.parastorage.com/services/santa-resources/resources/viewer/user-site-fonts/fonts/AugustBold/v1/augustbold-webfont.svg") format("svg");
    }

    @font-face {
      font-family: "August-Light";
      src: url("//static.parastorage.com/services/santa-resources/resources/viewer/user-site-fonts/fonts/AugustLight/v1/augustlight-webfont.eot?#iefix");
      src: url("//static.parastorage.com/services/santa-resources/resources/viewer/user-site-fonts/fonts/AugustLight/v1/augustlight-webfont.eot?#iefix") format("eot"),
        url("//static.parastorage.com/services/santa-resources/resources/viewer/user-site-fonts/fonts/AugustLight/v1/augustlight-webfont.woff2") format("woff2"),
        url("//static.parastorage.com/services/santa-resources/resources/viewer/user-site-fonts/fonts/AugustLight/v1/augustlight-webfont.woff") format("woff"),
        url("//static.parastorage.com/services/santa-resources/resources/viewer/user-site-fonts/fonts/AugustLight/v1/augustlight-webfont.ttf") format("truetype"),
        url("//static.parastorage.com/services/santa-resources/resources/viewer/user-site-fonts/fonts/AugustLight/v1/augustlight-webfont.svg") format("svg");
    }

    @font-face {
      font-family: "August-Medium";
      src: url("//static.parastorage.com/services/santa-resources/resources/viewer/user-site-fonts/fonts/AugustMedium/v1/augustmedium-webfont.eot?#iefix");
      src: url("//static.parastorage.com/services/santa-resources/resources/viewer/user-site-fonts/fonts/AugustMedium/v1/augustmedium-webfont.eot?#iefix") format("eot"),
        url("//static.parastorage.com/services/santa-resources/resources/viewer/user-site-fonts/fonts/AugustMedium/v1/augustmedium-webfont.woff2") format("woff2"),
        url("//static.parastorage.com/services/santa-resources/resources/viewer/user-site-fonts/fonts/AugustMedium/v1/augustmedium-webfont.woff") format("woff"),
        url("//static.parastorage.com/services/santa-resources/resources/viewer/user-site-fonts/fonts/AugustMedium/v1/augustmedium-webfont.ttf") format("truetype"),
        url("//static.parastorage.com/services/santa-resources/resources/viewer/user-site-fonts/fonts/AugustMedium/v1/augustmedium-webfont.svg") format("svg");
    }

    @font-face {
      font-family: "Knedge-Bold";
      src: url("//static.parastorage.com/services/santa-resources/resources/viewer/user-site-fonts/fonts/KnedgeBold/v1/knedgebold-webfont.eot?#iefix");
      src: url("//static.parastorage.com/services/santa-resources/resources/viewer/user-site-fonts/fonts/KnedgeBold/v1/knedgebold-webfont.eot?#iefix") format("eot"),
        url("//static.parastorage.com/services/santa-resources/resources/viewer/user-site-fonts/fonts/KnedgeBold/v1/knedgebold-webfont.woff2") format("woff2"),
        url("//static.parastorage.com/services/santa-resources/resources/viewer/user-site-fonts/fonts/KnedgeBold/v1/knedgebold-webfont.woff") format("woff"),
        url("//static.parastorage.com/services/santa-resources/resources/viewer/user-site-fonts/fonts/KnedgeBold/v1/knedgebold-webfont.ttf") format("truetype"),
        url("//static.parastorage.com/services/santa-resources/resources/viewer/user-site-fonts/fonts/KnedgeBold/v1/knedgebold-webfont.svg") format("svg");
    }

    @font-face {
      font-family: "TsukushiGothic";
      src: url("//static.parastorage.com/services/santa-resources/resources/viewer/user-site-fonts/fonts/Japanese/TsukushiGothic/v1/WIX-TsukuGoPr5-R.woff2") format("woff2"),
        url("//static.parastorage.com/services/santa-resources/resources/viewer/user-site-fonts/fonts/Japanese/TsukushiGothic/v1/WIX-TsukuGoPr5-R.woff") format("woff")
    }

    @font-face {
      font-family: "TsukushiGothic";
      font-weight: 700;
      src: url("//static.parastorage.com/services/santa-resources/resources/viewer/user-site-fonts/fonts/Japanese/TsukushiGothic/v1/WIX-TsukuGoPr5-D.woff2") format("woff2"),
        url("//static.parastorage.com/services/santa-resources/resources/viewer/user-site-fonts/fonts/Japanese/TsukushiGothic/v1/WIX-TsukuGoPr5-D.woff") format("woff")
    }

    @font-face {
      font-family: "Rodin-Light";
      src: url("//static.parastorage.com/services/santa-resources/resources/viewer/user-site-fonts/fonts/Japanese/Rodin/v1/WIX-RodinProN-L.woff2") format("woff2"),
        url("//static.parastorage.com/services/santa-resources/resources/viewer/user-site-fonts/fonts/Japanese/Rodin/v1/WIX-RodinProN-L.woff") format("woff")
    }

    /* mapped to rodin-medium*/
    @font-face {
      font-family: "Rodin-Light";
      font-weight: 700;
      src: url("//static.parastorage.com/services/santa-resources/resources/viewer/user-site-fonts/fonts/Japanese/Rodin/v1/WIX-RodinProN-M.woff2") format("woff2"),
        url("//static.parastorage.com/services/santa-resources/resources/viewer/user-site-fonts/fonts/Japanese/Rodin/v1/WIX-RodinProN-M.woff") format("woff")
    }

    @font-face {
      font-family: "Rodin-Demi-Bold";
      src: url("//static.parastorage.com/services/santa-resources/resources/viewer/user-site-fonts/fonts/Japanese/Rodin/v1/WIX-RodinProN-DB.woff2") format("woff2"),
        url("//static.parastorage.com/services/santa-resources/resources/viewer/user-site-fonts/fonts/Japanese/Rodin/v1/WIX-RodinProN-DB.woff") format("woff")
    }

    @font-face {
      font-family: "NewCezanne";
      src: url("//static.parastorage.com/services/santa-resources/resources/viewer/user-site-fonts/fonts/Japanese/NewCezanne/v1/WIX-NewCezanneProN-M.woff2") format("woff2"),
        url("//static.parastorage.com/services/santa-resources/resources/viewer/user-site-fonts/fonts/Japanese/NewCezanne/v1/WIX-NewCezanneProN-M.woff") format("woff")
    }

    @font-face {
      font-family: "UDKakugoLarge";
      src: url("//static.parastorage.com/services/santa-resources/resources/viewer/user-site-fonts/fonts/Japanese/UDKakugoLarge/v1/WIX-UDKakugo_LargePr6N-M.woff2") format("woff2"),
        url("//static.parastorage.com/services/santa-resources/resources/viewer/user-site-fonts/fonts/Japanese/UDKakugoLarge/v1/WIX-UDKakugo_LargePr6N-M.woff") format("woff")
    }

    @font-face {
      font-family: "UDKakugoLarge";
      font-weight: 700;
      src: url("//static.parastorage.com/services/santa-resources/resources/viewer/user-site-fonts/fonts/Japanese/UDKakugoLarge/v1/WIX-UDKakugo_LargePr6N-DB.woff2") format("woff2"),
        url("//static.parastorage.com/services/santa-resources/resources/viewer/user-site-fonts/fonts/Japanese/UDKakugoLarge/v1/WIX-UDKakugo_LargePr6N-DB.woff") format("woff")
    }

    @font-face {
      font-family: "TsukushiMaruGothic";
      src: url("//static.parastorage.com/services/santa-resources/resources/viewer/user-site-fonts/fonts/Japanese/TsukushiMaruGothic/v1/WIX-TsukuARdGothicStd-M.woff2") format("woff2"),
        url("//static.parastorage.com/services/santa-resources/resources/viewer/user-site-fonts/fonts/Japanese/TsukushiMaruGothic/v1/WIX-TsukuARdGothicStd-M.woff") format("woff")
    }

    @font-face {
      font-family: "TsukushiMaruGothic";
      font-weight: 700;
      src: url("//static.parastorage.com/services/santa-resources/resources/viewer/user-site-fonts/fonts/Japanese/TsukushiMaruGothic/v1/WIX-TsukuARdGothicStd-B.woff2") format("woff2"),
        url("//static.parastorage.com/services/santa-resources/resources/viewer/user-site-fonts/fonts/Japanese/TsukushiMaruGothic/v1/WIX-TsukuARdGothicStd-B.woff") format("woff")
    }

    @font-face {
      font-family: "Seurat";
      src: url("//static.parastorage.com/services/santa-resources/resources/viewer/user-site-fonts/fonts/Japanese/Seurat/v1/WIX-SeuratProN-M.woff2") format("woff2"),
        url("//static.parastorage.com/services/santa-resources/resources/viewer/user-site-fonts/fonts/Japanese/Seurat/v1/WIX-SeuratProN-M.woff") format("woff")
    }

    @font-face {
      font-family: "Seurat";
      font-weight: 700;
      src: url("//static.parastorage.com/services/santa-resources/resources/viewer/user-site-fonts/fonts/Japanese/Seurat/v1/WIX-SeuratProN-DB.woff2") format("woff2"),
        url("//static.parastorage.com/services/santa-resources/resources/viewer/user-site-fonts/fonts/Japanese/Seurat/v1/WIX-SeuratProN-DB.woff") format("woff")
    }

    @font-face {
      font-family: "TsukushiBMaruGothic";
      src: url("//static.parastorage.com/services/santa-resources/resources/viewer/user-site-fonts/fonts/Japanese/TsukushiBMaruGothic/v1/WIX-TsukuBRdGothicStd-M.woff2") format("woff2"),
        url("//static.parastorage.com/services/santa-resources/resources/viewer/user-site-fonts/fonts/Japanese/TsukushiBMaruGothic/v1/WIX-TsukuBRdGothicStd-M.woff") format("woff")
    }

    @font-face {
      font-family: "UDMincho";
      src: url("//static.parastorage.com/services/santa-resources/resources/viewer/user-site-fonts/fonts/Japanese/UDMincho/v1/WIX-UDMinchoPr6N-M.woff2") format("woff2"),
        url("//static.parastorage.com/services/santa-resources/resources/viewer/user-site-fonts/fonts/Japanese/UDMincho/v1/WIX-UDMinchoPr6N-M.woff") format("woff")
    }

    @font-face {
      font-family: "UDMincho";
      font-weight: 700;
      src: url("//static.parastorage.com/services/santa-resources/resources/viewer/user-site-fonts/fonts/Japanese/UDMincho/v1/WIX-UDMinchoPr6N-DB.woff2") format("woff2"),
        url("//static.parastorage.com/services/santa-resources/resources/viewer/user-site-fonts/fonts/Japanese/UDMincho/v1/WIX-UDMinchoPr6N-DB.woff") format("woff")
    }

    @font-face {
      font-family: "TsukushiOldMincho";
      src: url("//static.parastorage.com/services/santa-resources/resources/viewer/user-site-fonts/fonts/Japanese/TsukushiOldMincho/v1/WIX-TsukuAOldMinPr6N-M.woff2") format("woff2"),
        url("//static.parastorage.com/services/santa-resources/resources/viewer/user-site-fonts/fonts/Japanese/TsukushiOldMincho/v1/WIX-TsukuAOldMinPr6N-M.woff") format("woff")
    }

    @font-face {
      font-family: "Matisse";
      src: url("//static.parastorage.com/services/santa-resources/resources/viewer/user-site-fonts/fonts/Japanese/Matisse/v1/WIX-MatisseProN-M.woff2") format("woff2"),
        url("//static.parastorage.com/services/santa-resources/resources/viewer/user-site-fonts/fonts/Japanese/Matisse/v1/WIX-MatisseProN-M.woff") format("woff")
    }

    @font-face {
      font-family: "Matisse";
      font-weight: 700;
      src: url("//static.parastorage.com/services/santa-resources/resources/viewer/user-site-fonts/fonts/Japanese/Matisse/v1/WIX-MatisseProN-DB.woff2") format("woff2"),
        url("//static.parastorage.com/services/santa-resources/resources/viewer/user-site-fonts/fonts/Japanese/Matisse/v1/WIX-MatisseProN-DB.woff") format("woff")
    }

    @font-face {
      font-family: "Skip";
      src: url("//static.parastorage.com/services/santa-resources/resources/viewer/user-site-fonts/fonts/Japanese/Skip/v1/WIX-SkipStd-M.woff2") format("woff2"),
        url("//static.parastorage.com/services/santa-resources/resources/viewer/user-site-fonts/fonts/Japanese/Skip/v1/WIX-SkipStd-M.woff") format("woff")
    }

    @font-face {
      font-family: "Cookhand";
      src: url("//static.parastorage.com/services/santa-resources/resources/viewer/user-site-fonts/fonts/Japanese/Cookhand/v1/WIX-CookHandStd-R.woff2") format("woff2"),
        url("//static.parastorage.com/services/santa-resources/resources/viewer/user-site-fonts/fonts/Japanese/Cookhand/v1/WIX-CookHandStd-R.woff") format("woff")
    }
  </style>



  <style id="fonts.googleapis">
    /* cyrillic */
    @font-face {
      font-family: 'Amatic SC';
      font-style: normal;
      font-weight: 400;
      src: local('Amatic SC Regular'), local('AmaticSC-Regular'), url(https://fonts.gstatic.com/s/amaticsc/v13/TUZyzwprpvBS1izr_vOEDuSfQZQ.woff2) format('woff2');
      unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
    }

    /* hebrew */
    @font-face {
      font-family: 'Amatic SC';
      font-style: normal;
      font-weight: 400;
      src: local('Amatic SC Regular'), local('AmaticSC-Regular'), url(https://fonts.gstatic.com/s/amaticsc/v13/TUZyzwprpvBS1izr_vOECOSfQZQ.woff2) format('woff2');
      unicode-range: U+0590-05FF, U+20AA, U+25CC, U+FB1D-FB4F;
    }

    /* vietnamese */
    @font-face {
      font-family: 'Amatic SC';
      font-style: normal;
      font-weight: 400;
      src: local('Amatic SC Regular'), local('AmaticSC-Regular'), url(https://fonts.gstatic.com/s/amaticsc/v13/TUZyzwprpvBS1izr_vOEBeSfQZQ.woff2) format('woff2');
      unicode-range: U+0102-0103, U+0110-0111, U+1EA0-1EF9, U+20AB;
    }

    /* latin-ext */
    @font-face {
      font-family: 'Amatic SC';
      font-style: normal;
      font-weight: 400;
      src: local('Amatic SC Regular'), local('AmaticSC-Regular'), url(https://fonts.gstatic.com/s/amaticsc/v13/TUZyzwprpvBS1izr_vOEBOSfQZQ.woff2) format('woff2');
      unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
    }

    /* latin */
    @font-face {
      font-family: 'Amatic SC';
      font-style: normal;
      font-weight: 400;
      src: local('Amatic SC Regular'), local('AmaticSC-Regular'), url(https://fonts.gstatic.com/s/amaticsc/v13/TUZyzwprpvBS1izr_vOECuSf.woff2) format('woff2');
      unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
    }

    /* cyrillic */
    @font-face {
      font-family: 'Amatic SC';
      font-style: normal;
      font-weight: 700;
      src: local('Amatic SC Bold'), local('AmaticSC-Bold'), url(https://fonts.gstatic.com/s/amaticsc/v13/TUZ3zwprpvBS1izr_vOMscGKerUC7WQ.woff2) format('woff2');
      unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
    }

    /* hebrew */
    @font-face {
      font-family: 'Amatic SC';
      font-style: normal;
      font-weight: 700;
      src: local('Amatic SC Bold'), local('AmaticSC-Bold'), url(https://fonts.gstatic.com/s/amaticsc/v13/TUZ3zwprpvBS1izr_vOMscGKfLUC7WQ.woff2) format('woff2');
      unicode-range: U+0590-05FF, U+20AA, U+25CC, U+FB1D-FB4F;
    }

    /* vietnamese */
    @font-face {
      font-family: 'Amatic SC';
      font-style: normal;
      font-weight: 700;
      src: local('Amatic SC Bold'), local('AmaticSC-Bold'), url(https://fonts.gstatic.com/s/amaticsc/v13/TUZ3zwprpvBS1izr_vOMscGKcbUC7WQ.woff2) format('woff2');
      unicode-range: U+0102-0103, U+0110-0111, U+1EA0-1EF9, U+20AB;
    }

    /* latin-ext */
    @font-face {
      font-family: 'Amatic SC';
      font-style: normal;
      font-weight: 700;
      src: local('Amatic SC Bold'), local('AmaticSC-Bold'), url(https://fonts.gstatic.com/s/amaticsc/v13/TUZ3zwprpvBS1izr_vOMscGKcLUC7WQ.woff2) format('woff2');
      unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
    }

    /* latin */
    @font-face {
      font-family: 'Amatic SC';
      font-style: normal;
      font-weight: 700;
      src: local('Amatic SC Bold'), local('AmaticSC-Bold'), url(https://fonts.gstatic.com/s/amaticsc/v13/TUZ3zwprpvBS1izr_vOMscGKfrUC.woff2) format('woff2');
      unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
    }

    /* vietnamese */
    @font-face {
      font-family: 'Anton';
      font-style: normal;
      font-weight: 400;
      src: local('Anton Regular'), local('Anton-Regular'), url(https://fonts.gstatic.com/s/anton/v11/1Ptgg87LROyAm3K8-C8QSw.woff2) format('woff2');
      unicode-range: U+0102-0103, U+0110-0111, U+1EA0-1EF9, U+20AB;
    }

    /* latin-ext */
    @font-face {
      font-family: 'Anton';
      font-style: normal;
      font-weight: 400;
      src: local('Anton Regular'), local('Anton-Regular'), url(https://fonts.gstatic.com/s/anton/v11/1Ptgg87LROyAm3K9-C8QSw.woff2) format('woff2');
      unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
    }

    /* latin */
    @font-face {
      font-family: 'Anton';
      font-style: normal;
      font-weight: 400;
      src: local('Anton Regular'), local('Anton-Regular'), url(https://fonts.gstatic.com/s/anton/v11/1Ptgg87LROyAm3Kz-C8.woff2) format('woff2');
      unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
    }

    /* vietnamese */
    @font-face {
      font-family: 'Barlow';
      font-style: italic;
      font-weight: 400;
      src: local('Barlow Italic'), local('Barlow-Italic'), url(https://fonts.gstatic.com/s/barlow/v4/7cHrv4kjgoGqM7E_Cfs0wH8RnA.woff2) format('woff2');
      unicode-range: U+0102-0103, U+0110-0111, U+1EA0-1EF9, U+20AB;
    }

    /* latin-ext */
    @font-face {
      font-family: 'Barlow';
      font-style: italic;
      font-weight: 400;
      src: local('Barlow Italic'), local('Barlow-Italic'), url(https://fonts.gstatic.com/s/barlow/v4/7cHrv4kjgoGqM7E_Cfs1wH8RnA.woff2) format('woff2');
      unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
    }

    /* latin */
    @font-face {
      font-family: 'Barlow';
      font-style: italic;
      font-weight: 400;
      src: local('Barlow Italic'), local('Barlow-Italic'), url(https://fonts.gstatic.com/s/barlow/v4/7cHrv4kjgoGqM7E_Cfs7wH8.woff2) format('woff2');
      unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
    }

    /* vietnamese */
    @font-face {
      font-family: 'Barlow';
      font-style: italic;
      font-weight: 700;
      src: local('Barlow Bold Italic'), local('Barlow-BoldItalic'), url(https://fonts.gstatic.com/s/barlow/v4/7cHsv4kjgoGqM7E_CfOA5WohvTobdw.woff2) format('woff2');
      unicode-range: U+0102-0103, U+0110-0111, U+1EA0-1EF9, U+20AB;
    }

    /* latin-ext */
    @font-face {
      font-family: 'Barlow';
      font-style: italic;
      font-weight: 700;
      src: local('Barlow Bold Italic'), local('Barlow-BoldItalic'), url(https://fonts.gstatic.com/s/barlow/v4/7cHsv4kjgoGqM7E_CfOA5WogvTobdw.woff2) format('woff2');
      unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
    }

    /* latin */
    @font-face {
      font-family: 'Barlow';
      font-style: italic;
      font-weight: 700;
      src: local('Barlow Bold Italic'), local('Barlow-BoldItalic'), url(https://fonts.gstatic.com/s/barlow/v4/7cHsv4kjgoGqM7E_CfOA5WouvTo.woff2) format('woff2');
      unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
    }

    /* vietnamese */
    @font-face {
      font-family: 'Barlow';
      font-style: normal;
      font-weight: 400;
      src: local('Barlow Regular'), local('Barlow-Regular'), url(https://fonts.gstatic.com/s/barlow/v4/7cHpv4kjgoGqM7E_A8s52Hs.woff2) format('woff2');
      unicode-range: U+0102-0103, U+0110-0111, U+1EA0-1EF9, U+20AB;
    }

    /* latin-ext */
    @font-face {
      font-family: 'Barlow';
      font-style: normal;
      font-weight: 400;
      src: local('Barlow Regular'), local('Barlow-Regular'), url(https://fonts.gstatic.com/s/barlow/v4/7cHpv4kjgoGqM7E_Ass52Hs.woff2) format('woff2');
      unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
    }

    /* latin */
    @font-face {
      font-family: 'Barlow';
      font-style: normal;
      font-weight: 400;
      src: local('Barlow Regular'), local('Barlow-Regular'), url(https://fonts.gstatic.com/s/barlow/v4/7cHpv4kjgoGqM7E_DMs5.woff2) format('woff2');
      unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
    }

    /* vietnamese */
    @font-face {
      font-family: 'Barlow';
      font-style: normal;
      font-weight: 700;
      src: local('Barlow Bold'), local('Barlow-Bold'), url(https://fonts.gstatic.com/s/barlow/v4/7cHqv4kjgoGqM7E3t-4s6FospT4.woff2) format('woff2');
      unicode-range: U+0102-0103, U+0110-0111, U+1EA0-1EF9, U+20AB;
    }

    /* latin-ext */
    @font-face {
      font-family: 'Barlow';
      font-style: normal;
      font-weight: 700;
      src: local('Barlow Bold'), local('Barlow-Bold'), url(https://fonts.gstatic.com/s/barlow/v4/7cHqv4kjgoGqM7E3t-4s6VospT4.woff2) format('woff2');
      unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
    }

    /* latin */
    @font-face {
      font-family: 'Barlow';
      font-style: normal;
      font-weight: 700;
      src: local('Barlow Bold'), local('Barlow-Bold'), url(https://fonts.gstatic.com/s/barlow/v4/7cHqv4kjgoGqM7E3t-4s51os.woff2) format('woff2');
      unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
    }

    /* latin-ext */
    @font-face {
      font-family: 'Basic';
      font-style: normal;
      font-weight: 400;
      src: local('Basic Regular'), local('Basic-Regular'), url(https://fonts.gstatic.com/s/basic/v9/xfu_0WLxV2_XKTN-6FHlyQ.woff2) format('woff2');
      unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
    }

    /* latin */
    @font-face {
      font-family: 'Basic';
      font-style: normal;
      font-weight: 400;
      src: local('Basic Regular'), local('Basic-Regular'), url(https://fonts.gstatic.com/s/basic/v9/xfu_0WLxV2_XKTNw6FE.woff2) format('woff2');
      unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
    }

    /* greek-ext */
    @font-face {
      font-family: 'Caudex';
      font-style: italic;
      font-weight: 400;
      src: local('Caudex Italic'), local('Caudex-Italic'), url(https://fonts.gstatic.com/s/caudex/v9/esDS311QOP6BJUr4yMKPtbo-Ew.woff2) format('woff2');
      unicode-range: U+1F00-1FFF;
    }

    /* greek */
    @font-face {
      font-family: 'Caudex';
      font-style: italic;
      font-weight: 400;
      src: local('Caudex Italic'), local('Caudex-Italic'), url(https://fonts.gstatic.com/s/caudex/v9/esDS311QOP6BJUr4yMKAtbo-Ew.woff2) format('woff2');
      unicode-range: U+0370-03FF;
    }

    /* latin-ext */
    @font-face {
      font-family: 'Caudex';
      font-style: italic;
      font-weight: 400;
      src: local('Caudex Italic'), local('Caudex-Italic'), url(https://fonts.gstatic.com/s/caudex/v9/esDS311QOP6BJUr4yMKNtbo-Ew.woff2) format('woff2');
      unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
    }

    /* latin */
    @font-face {
      font-family: 'Caudex';
      font-style: italic;
      font-weight: 400;
      src: local('Caudex Italic'), local('Caudex-Italic'), url(https://fonts.gstatic.com/s/caudex/v9/esDS311QOP6BJUr4yMKDtbo.woff2) format('woff2');
      unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
    }

    /* greek-ext */
    @font-face {
      font-family: 'Caudex';
      font-style: italic;
      font-weight: 700;
      src: local('Caudex Bold Italic'), local('Caudex-BoldItalic'), url(https://fonts.gstatic.com/s/caudex/v9/esDV311QOP6BJUr4yMo4kK8NMpWeGQ.woff2) format('woff2');
      unicode-range: U+1F00-1FFF;
    }

    /* greek */
    @font-face {
      font-family: 'Caudex';
      font-style: italic;
      font-weight: 700;
      src: local('Caudex Bold Italic'), local('Caudex-BoldItalic'), url(https://fonts.gstatic.com/s/caudex/v9/esDV311QOP6BJUr4yMo4kK8CMpWeGQ.woff2) format('woff2');
      unicode-range: U+0370-03FF;
    }

    /* latin-ext */
    @font-face {
      font-family: 'Caudex';
      font-style: italic;
      font-weight: 700;
      src: local('Caudex Bold Italic'), local('Caudex-BoldItalic'), url(https://fonts.gstatic.com/s/caudex/v9/esDV311QOP6BJUr4yMo4kK8PMpWeGQ.woff2) format('woff2');
      unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
    }

    /* latin */
    @font-face {
      font-family: 'Caudex';
      font-style: italic;
      font-weight: 700;
      src: local('Caudex Bold Italic'), local('Caudex-BoldItalic'), url(https://fonts.gstatic.com/s/caudex/v9/esDV311QOP6BJUr4yMo4kK8BMpU.woff2) format('woff2');
      unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
    }

    /* greek-ext */
    @font-face {
      font-family: 'Caudex';
      font-style: normal;
      font-weight: 400;
      src: local('Caudex'), url(https://fonts.gstatic.com/s/caudex/v9/esDQ311QOP6BJUr4wfKBrb4.woff2) format('woff2');
      unicode-range: U+1F00-1FFF;
    }

    /* greek */
    @font-face {
      font-family: 'Caudex';
      font-style: normal;
      font-weight: 400;
      src: local('Caudex'), url(https://fonts.gstatic.com/s/caudex/v9/esDQ311QOP6BJUr4zvKBrb4.woff2) format('woff2');
      unicode-range: U+0370-03FF;
    }

    /* latin-ext */
    @font-face {
      font-family: 'Caudex';
      font-style: normal;
      font-weight: 400;
      src: local('Caudex'), url(https://fonts.gstatic.com/s/caudex/v9/esDQ311QOP6BJUr4w_KBrb4.woff2) format('woff2');
      unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
    }

    /* latin */
    @font-face {
      font-family: 'Caudex';
      font-style: normal;
      font-weight: 400;
      src: local('Caudex'), url(https://fonts.gstatic.com/s/caudex/v9/esDQ311QOP6BJUr4zfKB.woff2) format('woff2');
      unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
    }

    /* greek-ext */
    @font-face {
      font-family: 'Caudex';
      font-style: normal;
      font-weight: 700;
      src: local('Caudex Bold'), local('Caudex-Bold'), url(https://fonts.gstatic.com/s/caudex/v9/esDT311QOP6BJUrwdteUnp8DKpE.woff2) format('woff2');
      unicode-range: U+1F00-1FFF;
    }

    /* greek */
    @font-face {
      font-family: 'Caudex';
      font-style: normal;
      font-weight: 700;
      src: local('Caudex Bold'), local('Caudex-Bold'), url(https://fonts.gstatic.com/s/caudex/v9/esDT311QOP6BJUrwdteUkZ8DKpE.woff2) format('woff2');
      unicode-range: U+0370-03FF;
    }

    /* latin-ext */
    @font-face {
      font-family: 'Caudex';
      font-style: normal;
      font-weight: 700;
      src: local('Caudex Bold'), local('Caudex-Bold'), url(https://fonts.gstatic.com/s/caudex/v9/esDT311QOP6BJUrwdteUnJ8DKpE.woff2) format('woff2');
      unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
    }

    /* latin */
    @font-face {
      font-family: 'Caudex';
      font-style: normal;
      font-weight: 700;
      src: local('Caudex Bold'), local('Caudex-Bold'), url(https://fonts.gstatic.com/s/caudex/v9/esDT311QOP6BJUrwdteUkp8D.woff2) format('woff2');
      unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
    }

    /* latin-ext */
    @font-face {
      font-family: 'Chelsea Market';
      font-style: normal;
      font-weight: 400;
      src: local('Chelsea Market'), local('ChelseaMarket-Regular'), url(https://fonts.gstatic.com/s/chelseamarket/v7/BCawqZsHqfr89WNP_IApC8tzKChsJg8eKg.woff2) format('woff2');
      unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
    }

    /* latin */
    @font-face {
      font-family: 'Chelsea Market';
      font-style: normal;
      font-weight: 400;
      src: local('Chelsea Market'), local('ChelseaMarket-Regular'), url(https://fonts.gstatic.com/s/chelseamarket/v7/BCawqZsHqfr89WNP_IApC8tzKChiJg8.woff2) format('woff2');
      unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
    }

    /* latin-ext */
    @font-face {
      font-family: 'Cinzel';
      font-style: normal;
      font-weight: 400;
      src: local('Cinzel Regular'), local('Cinzel-Regular'), url(https://fonts.gstatic.com/s/cinzel/v9/8vIJ7ww63mVu7gt7-GT7LEc.woff2) format('woff2');
      unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
    }

    /* latin */
    @font-face {
      font-family: 'Cinzel';
      font-style: normal;
      font-weight: 400;
      src: local('Cinzel Regular'), local('Cinzel-Regular'), url(https://fonts.gstatic.com/s/cinzel/v9/8vIJ7ww63mVu7gt79mT7.woff2) format('woff2');
      unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
    }

    /* latin-ext */
    @font-face {
      font-family: 'Cinzel';
      font-style: normal;
      font-weight: 700;
      src: local('Cinzel Bold'), local('Cinzel-Bold'), url(https://fonts.gstatic.com/s/cinzel/v9/8vIK7ww63mVu7gtzTUHuHWZaC_w.woff2) format('woff2');
      unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
    }

    /* latin */
    @font-face {
      font-family: 'Cinzel';
      font-style: normal;
      font-weight: 700;
      src: local('Cinzel Bold'), local('Cinzel-Bold'), url(https://fonts.gstatic.com/s/cinzel/v9/8vIK7ww63mVu7gtzTUHuE2Za.woff2) format('woff2');
      unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
    }

    /* latin */
    @font-face {
      font-family: 'Cookie';
      font-style: normal;
      font-weight: 400;
      src: local('Cookie-Regular'), url(https://fonts.gstatic.com/s/cookie/v11/syky-y18lb0tSbf9kgqS.woff2) format('woff2');
      unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
    }

    /* latin-ext */
    @font-face {
      font-family: 'Corben';
      font-style: normal;
      font-weight: 400;
      src: local('Corben Regular'), local('Corben-Regular'), url(https://fonts.gstatic.com/s/corben/v13/LYjDdGzzklQtCMpNqQNFlVs.woff2) format('woff2');
      unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
    }

    /* latin */
    @font-face {
      font-family: 'Corben';
      font-style: normal;
      font-weight: 400;
      src: local('Corben Regular'), local('Corben-Regular'), url(https://fonts.gstatic.com/s/corben/v13/LYjDdGzzklQtCMpNpwNF.woff2) format('woff2');
      unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
    }

    /* latin-ext */
    @font-face {
      font-family: 'Corben';
      font-style: normal;
      font-weight: 700;
      src: local('Corben'), url(https://fonts.gstatic.com/s/corben/v13/LYjAdGzzklQtCMpFHCZQpHoqbN4.woff2) format('woff2');
      unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
    }

    /* latin */
    @font-face {
      font-family: 'Corben';
      font-style: normal;
      font-weight: 700;
      src: local('Corben'), url(https://fonts.gstatic.com/s/corben/v13/LYjAdGzzklQtCMpFHCZQqnoq.woff2) format('woff2');
      unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
    }

    /* cyrillic-ext */
    @font-face {
      font-family: 'Cormorant Garamond';
      font-style: italic;
      font-weight: 400;
      src: local('Cormorant Garamond Italic'), local('CormorantGaramond-Italic'), url(https://fonts.gstatic.com/s/cormorantgaramond/v7/co3ZmX5slCNuHLi8bLeY9MK7whWMhyjYrEtFmSq17w.woff2) format('woff2');
      unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
    }

    /* cyrillic */
    @font-face {
      font-family: 'Cormorant Garamond';
      font-style: italic;
      font-weight: 400;
      src: local('Cormorant Garamond Italic'), local('CormorantGaramond-Italic'), url(https://fonts.gstatic.com/s/cormorantgaramond/v7/co3ZmX5slCNuHLi8bLeY9MK7whWMhyjYrEtMmSq17w.woff2) format('woff2');
      unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
    }

    /* vietnamese */
    @font-face {
      font-family: 'Cormorant Garamond';
      font-style: italic;
      font-weight: 400;
      src: local('Cormorant Garamond Italic'), local('CormorantGaramond-Italic'), url(https://fonts.gstatic.com/s/cormorantgaramond/v7/co3ZmX5slCNuHLi8bLeY9MK7whWMhyjYrEtHmSq17w.woff2) format('woff2');
      unicode-range: U+0102-0103, U+0110-0111, U+1EA0-1EF9, U+20AB;
    }

    /* latin-ext */
    @font-face {
      font-family: 'Cormorant Garamond';
      font-style: italic;
      font-weight: 400;
      src: local('Cormorant Garamond Italic'), local('CormorantGaramond-Italic'), url(https://fonts.gstatic.com/s/cormorantgaramond/v7/co3ZmX5slCNuHLi8bLeY9MK7whWMhyjYrEtGmSq17w.woff2) format('woff2');
      unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
    }

    /* latin */
    @font-face {
      font-family: 'Cormorant Garamond';
      font-style: italic;
      font-weight: 400;
      src: local('Cormorant Garamond Italic'), local('CormorantGaramond-Italic'), url(https://fonts.gstatic.com/s/cormorantgaramond/v7/co3ZmX5slCNuHLi8bLeY9MK7whWMhyjYrEtImSo.woff2) format('woff2');
      unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
    }

    /* cyrillic-ext */
    @font-face {
      font-family: 'Cormorant Garamond';
      font-style: italic;
      font-weight: 700;
      src: local('Cormorant Garamond Bold Italic'), local('CormorantGaramond-BoldItalic'), url(https://fonts.gstatic.com/s/cormorantgaramond/v7/co3WmX5slCNuHLi8bLeY9MK7whWMhyjYrEPzvD-HzhO7_w.woff2) format('woff2');
      unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
    }

    /* cyrillic */
    @font-face {
      font-family: 'Cormorant Garamond';
      font-style: italic;
      font-weight: 700;
      src: local('Cormorant Garamond Bold Italic'), local('CormorantGaramond-BoldItalic'), url(https://fonts.gstatic.com/s/cormorantgaramond/v7/co3WmX5slCNuHLi8bLeY9MK7whWMhyjYrEPzvD-OzhO7_w.woff2) format('woff2');
      unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
    }

    /* vietnamese */
    @font-face {
      font-family: 'Cormorant Garamond';
      font-style: italic;
      font-weight: 700;
      src: local('Cormorant Garamond Bold Italic'), local('CormorantGaramond-BoldItalic'), url(https://fonts.gstatic.com/s/cormorantgaramond/v7/co3WmX5slCNuHLi8bLeY9MK7whWMhyjYrEPzvD-FzhO7_w.woff2) format('woff2');
      unicode-range: U+0102-0103, U+0110-0111, U+1EA0-1EF9, U+20AB;
    }

    /* latin-ext */
    @font-face {
      font-family: 'Cormorant Garamond';
      font-style: italic;
      font-weight: 700;
      src: local('Cormorant Garamond Bold Italic'), local('CormorantGaramond-BoldItalic'), url(https://fonts.gstatic.com/s/cormorantgaramond/v7/co3WmX5slCNuHLi8bLeY9MK7whWMhyjYrEPzvD-EzhO7_w.woff2) format('woff2');
      unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
    }

    /* latin */
    @font-face {
      font-family: 'Cormorant Garamond';
      font-style: italic;
      font-weight: 700;
      src: local('Cormorant Garamond Bold Italic'), local('CormorantGaramond-BoldItalic'), url(https://fonts.gstatic.com/s/cormorantgaramond/v7/co3WmX5slCNuHLi8bLeY9MK7whWMhyjYrEPzvD-KzhM.woff2) format('woff2');
      unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
    }

    /* cyrillic-ext */
    @font-face {
      font-family: 'Cormorant Garamond';
      font-style: normal;
      font-weight: 400;
      src: local('Cormorant Garamond Regular'), local('CormorantGaramond-Regular'), url(https://fonts.gstatic.com/s/cormorantgaramond/v7/co3bmX5slCNuHLi8bLeY9MK7whWMhyjYpHtKgS4.woff2) format('woff2');
      unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
    }

    /* cyrillic */
    @font-face {
      font-family: 'Cormorant Garamond';
      font-style: normal;
      font-weight: 400;
      src: local('Cormorant Garamond Regular'), local('CormorantGaramond-Regular'), url(https://fonts.gstatic.com/s/cormorantgaramond/v7/co3bmX5slCNuHLi8bLeY9MK7whWMhyjYrXtKgS4.woff2) format('woff2');
      unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
    }

    /* vietnamese */
    @font-face {
      font-family: 'Cormorant Garamond';
      font-style: normal;
      font-weight: 400;
      src: local('Cormorant Garamond Regular'), local('CormorantGaramond-Regular'), url(https://fonts.gstatic.com/s/cormorantgaramond/v7/co3bmX5slCNuHLi8bLeY9MK7whWMhyjYpntKgS4.woff2) format('woff2');
      unicode-range: U+0102-0103, U+0110-0111, U+1EA0-1EF9, U+20AB;
    }

    /* latin-ext */
    @font-face {
      font-family: 'Cormorant Garamond';
      font-style: normal;
      font-weight: 400;
      src: local('Cormorant Garamond Regular'), local('CormorantGaramond-Regular'), url(https://fonts.gstatic.com/s/cormorantgaramond/v7/co3bmX5slCNuHLi8bLeY9MK7whWMhyjYp3tKgS4.woff2) format('woff2');
      unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
    }

    /* latin */
    @font-face {
      font-family: 'Cormorant Garamond';
      font-style: normal;
      font-weight: 400;
      src: local('Cormorant Garamond Regular'), local('CormorantGaramond-Regular'), url(https://fonts.gstatic.com/s/cormorantgaramond/v7/co3bmX5slCNuHLi8bLeY9MK7whWMhyjYqXtK.woff2) format('woff2');
      unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
    }

    /* cyrillic-ext */
    @font-face {
      font-family: 'Cormorant Garamond';
      font-style: normal;
      font-weight: 700;
      src: local('Cormorant Garamond Bold'), local('CormorantGaramond-Bold'), url(https://fonts.gstatic.com/s/cormorantgaramond/v7/co3YmX5slCNuHLi8bLeY9MK7whWMhyjQEl5fsw-I1hc.woff2) format('woff2');
      unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
    }

    /* cyrillic */
    @font-face {
      font-family: 'Cormorant Garamond';
      font-style: normal;
      font-weight: 700;
      src: local('Cormorant Garamond Bold'), local('CormorantGaramond-Bold'), url(https://fonts.gstatic.com/s/cormorantgaramond/v7/co3YmX5slCNuHLi8bLeY9MK7whWMhyjQEl5fug-I1hc.woff2) format('woff2');
      unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
    }

    /* vietnamese */
    @font-face {
      font-family: 'Cormorant Garamond';
      font-style: normal;
      font-weight: 700;
      src: local('Cormorant Garamond Bold'), local('CormorantGaramond-Bold'), url(https://fonts.gstatic.com/s/cormorantgaramond/v7/co3YmX5slCNuHLi8bLeY9MK7whWMhyjQEl5fsQ-I1hc.woff2) format('woff2');
      unicode-range: U+0102-0103, U+0110-0111, U+1EA0-1EF9, U+20AB;
    }

    /* latin-ext */
    @font-face {
      font-family: 'Cormorant Garamond';
      font-style: normal;
      font-weight: 700;
      src: local('Cormorant Garamond Bold'), local('CormorantGaramond-Bold'), url(https://fonts.gstatic.com/s/cormorantgaramond/v7/co3YmX5slCNuHLi8bLeY9MK7whWMhyjQEl5fsA-I1hc.woff2) format('woff2');
      unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
    }

    /* latin */
    @font-face {
      font-family: 'Cormorant Garamond';
      font-style: normal;
      font-weight: 700;
      src: local('Cormorant Garamond Bold'), local('CormorantGaramond-Bold'), url(https://fonts.gstatic.com/s/cormorantgaramond/v7/co3YmX5slCNuHLi8bLeY9MK7whWMhyjQEl5fvg-I.woff2) format('woff2');
      unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
    }

    /* latin */
    @font-face {
      font-family: 'Damion';
      font-style: normal;
      font-weight: 400;
      src: local('Damion'), url(https://fonts.gstatic.com/s/damion/v9/hv-XlzJ3KEUe_YZkamw2.woff2) format('woff2');
      unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
    }

    /* vietnamese */
    @font-face {
      font-family: 'Dancing Script';
      font-style: normal;
      font-weight: 400;
      src: url(https://fonts.gstatic.com/s/dancingscript/v13/If2RXTr6YS-zF4S-kcSWSVi_szLviuEViw.woff2) format('woff2');
      unicode-range: U+0102-0103, U+0110-0111, U+1EA0-1EF9, U+20AB;
    }

    /* latin-ext */
    @font-face {
      font-family: 'Dancing Script';
      font-style: normal;
      font-weight: 400;
      src: url(https://fonts.gstatic.com/s/dancingscript/v13/If2RXTr6YS-zF4S-kcSWSVi_szLuiuEViw.woff2) format('woff2');
      unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
    }

    /* latin */
    @font-face {
      font-family: 'Dancing Script';
      font-style: normal;
      font-weight: 400;
      src: url(https://fonts.gstatic.com/s/dancingscript/v13/If2RXTr6YS-zF4S-kcSWSVi_szLgiuE.woff2) format('woff2');
      unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
    }

    /* vietnamese */
    @font-face {
      font-family: 'Dancing Script';
      font-style: normal;
      font-weight: 700;
      src: url(https://fonts.gstatic.com/s/dancingscript/v13/If2RXTr6YS-zF4S-kcSWSVi_szLviuEViw.woff2) format('woff2');
      unicode-range: U+0102-0103, U+0110-0111, U+1EA0-1EF9, U+20AB;
    }

    /* latin-ext */
    @font-face {
      font-family: 'Dancing Script';
      font-style: normal;
      font-weight: 700;
      src: url(https://fonts.gstatic.com/s/dancingscript/v13/If2RXTr6YS-zF4S-kcSWSVi_szLuiuEViw.woff2) format('woff2');
      unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
    }

    /* latin */
    @font-face {
      font-family: 'Dancing Script';
      font-style: normal;
      font-weight: 700;
      src: url(https://fonts.gstatic.com/s/dancingscript/v13/If2RXTr6YS-zF4S-kcSWSVi_szLgiuE.woff2) format('woff2');
      unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
    }

    /* cyrillic-ext */
    @font-face {
      font-family: 'EB Garamond';
      font-style: italic;
      font-weight: 400;
      src: url(https://fonts.gstatic.com/s/ebgaramond/v12/SlGWmQSNjdsmc35JDF1K5GRweDY1ZzPJ.woff2) format('woff2');
      unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
    }

    /* cyrillic */
    @font-face {
      font-family: 'EB Garamond';
      font-style: italic;
      font-weight: 400;
      src: url(https://fonts.gstatic.com/s/ebgaramond/v12/SlGWmQSNjdsmc35JDF1K5GRweD81ZzPJ.woff2) format('woff2');
      unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
    }

    /* greek-ext */
    @font-face {
      font-family: 'EB Garamond';
      font-style: italic;
      font-weight: 400;
      src: url(https://fonts.gstatic.com/s/ebgaramond/v12/SlGWmQSNjdsmc35JDF1K5GRweDc1ZzPJ.woff2) format('woff2');
      unicode-range: U+1F00-1FFF;
    }

    /* greek */
    @font-face {
      font-family: 'EB Garamond';
      font-style: italic;
      font-weight: 400;
      src: url(https://fonts.gstatic.com/s/ebgaramond/v12/SlGWmQSNjdsmc35JDF1K5GRweDg1ZzPJ.woff2) format('woff2');
      unicode-range: U+0370-03FF;
    }

    /* vietnamese */
    @font-face {
      font-family: 'EB Garamond';
      font-style: italic;
      font-weight: 400;
      src: url(https://fonts.gstatic.com/s/ebgaramond/v12/SlGWmQSNjdsmc35JDF1K5GRweDQ1ZzPJ.woff2) format('woff2');
      unicode-range: U+0102-0103, U+0110-0111, U+1EA0-1EF9, U+20AB;
    }

    /* latin-ext */
    @font-face {
      font-family: 'EB Garamond';
      font-style: italic;
      font-weight: 400;
      src: url(https://fonts.gstatic.com/s/ebgaramond/v12/SlGWmQSNjdsmc35JDF1K5GRweDU1ZzPJ.woff2) format('woff2');
      unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
    }

    /* latin */
    @font-face {
      font-family: 'EB Garamond';
      font-style: italic;
      font-weight: 400;
      src: url(https://fonts.gstatic.com/s/ebgaramond/v12/SlGWmQSNjdsmc35JDF1K5GRweDs1Zw.woff2) format('woff2');
      unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
    }

    /* cyrillic-ext */
    @font-face {
      font-family: 'EB Garamond';
      font-style: italic;
      font-weight: 700;
      src: url(https://fonts.gstatic.com/s/ebgaramond/v12/SlGWmQSNjdsmc35JDF1K5GRweDY1ZzPJ.woff2) format('woff2');
      unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
    }

    /* cyrillic */
    @font-face {
      font-family: 'EB Garamond';
      font-style: italic;
      font-weight: 700;
      src: url(https://fonts.gstatic.com/s/ebgaramond/v12/SlGWmQSNjdsmc35JDF1K5GRweD81ZzPJ.woff2) format('woff2');
      unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
    }

    /* greek-ext */
    @font-face {
      font-family: 'EB Garamond';
      font-style: italic;
      font-weight: 700;
      src: url(https://fonts.gstatic.com/s/ebgaramond/v12/SlGWmQSNjdsmc35JDF1K5GRweDc1ZzPJ.woff2) format('woff2');
      unicode-range: U+1F00-1FFF;
    }

    /* greek */
    @font-face {
      font-family: 'EB Garamond';
      font-style: italic;
      font-weight: 700;
      src: url(https://fonts.gstatic.com/s/ebgaramond/v12/SlGWmQSNjdsmc35JDF1K5GRweDg1ZzPJ.woff2) format('woff2');
      unicode-range: U+0370-03FF;
    }

    /* vietnamese */
    @font-face {
      font-family: 'EB Garamond';
      font-style: italic;
      font-weight: 700;
      src: url(https://fonts.gstatic.com/s/ebgaramond/v12/SlGWmQSNjdsmc35JDF1K5GRweDQ1ZzPJ.woff2) format('woff2');
      unicode-range: U+0102-0103, U+0110-0111, U+1EA0-1EF9, U+20AB;
    }

    /* latin-ext */
    @font-face {
      font-family: 'EB Garamond';
      font-style: italic;
      font-weight: 700;
      src: url(https://fonts.gstatic.com/s/ebgaramond/v12/SlGWmQSNjdsmc35JDF1K5GRweDU1ZzPJ.woff2) format('woff2');
      unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
    }

    /* latin */
    @font-face {
      font-family: 'EB Garamond';
      font-style: italic;
      font-weight: 700;
      src: url(https://fonts.gstatic.com/s/ebgaramond/v12/SlGWmQSNjdsmc35JDF1K5GRweDs1Zw.woff2) format('woff2');
      unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
    }

    /* cyrillic-ext */
    @font-face {
      font-family: 'EB Garamond';
      font-style: normal;
      font-weight: 400;
      src: url(https://fonts.gstatic.com/s/ebgaramond/v12/SlGUmQSNjdsmc35JDF1K5GR4SDktYw.woff2) format('woff2');
      unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
    }

    /* cyrillic */
    @font-face {
      font-family: 'EB Garamond';
      font-style: normal;
      font-weight: 400;
      src: url(https://fonts.gstatic.com/s/ebgaramond/v12/SlGUmQSNjdsmc35JDF1K5GRxSDktYw.woff2) format('woff2');
      unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
    }

    /* greek-ext */
    @font-face {
      font-family: 'EB Garamond';
      font-style: normal;
      font-weight: 400;
      src: url(https://fonts.gstatic.com/s/ebgaramond/v12/SlGUmQSNjdsmc35JDF1K5GR5SDktYw.woff2) format('woff2');
      unicode-range: U+1F00-1FFF;
    }

    /* greek */
    @font-face {
      font-family: 'EB Garamond';
      font-style: normal;
      font-weight: 400;
      src: url(https://fonts.gstatic.com/s/ebgaramond/v12/SlGUmQSNjdsmc35JDF1K5GR2SDktYw.woff2) format('woff2');
      unicode-range: U+0370-03FF;
    }

    /* vietnamese */
    @font-face {
      font-family: 'EB Garamond';
      font-style: normal;
      font-weight: 400;
      src: url(https://fonts.gstatic.com/s/ebgaramond/v12/SlGUmQSNjdsmc35JDF1K5GR6SDktYw.woff2) format('woff2');
      unicode-range: U+0102-0103, U+0110-0111, U+1EA0-1EF9, U+20AB;
    }

    /* latin-ext */
    @font-face {
      font-family: 'EB Garamond';
      font-style: normal;
      font-weight: 400;
      src: url(https://fonts.gstatic.com/s/ebgaramond/v12/SlGUmQSNjdsmc35JDF1K5GR7SDktYw.woff2) format('woff2');
      unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
    }

    /* latin */
    @font-face {
      font-family: 'EB Garamond';
      font-style: normal;
      font-weight: 400;
      src: url(https://fonts.gstatic.com/s/ebgaramond/v12/SlGUmQSNjdsmc35JDF1K5GR1SDk.woff2) format('woff2');
      unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
    }

    /* cyrillic-ext */
    @font-face {
      font-family: 'EB Garamond';
      font-style: normal;
      font-weight: 700;
      src: url(https://fonts.gstatic.com/s/ebgaramond/v12/SlGUmQSNjdsmc35JDF1K5GR4SDktYw.woff2) format('woff2');
      unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
    }

    /* cyrillic */
    @font-face {
      font-family: 'EB Garamond';
      font-style: normal;
      font-weight: 700;
      src: url(https://fonts.gstatic.com/s/ebgaramond/v12/SlGUmQSNjdsmc35JDF1K5GRxSDktYw.woff2) format('woff2');
      unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
    }

    /* greek-ext */
    @font-face {
      font-family: 'EB Garamond';
      font-style: normal;
      font-weight: 700;
      src: url(https://fonts.gstatic.com/s/ebgaramond/v12/SlGUmQSNjdsmc35JDF1K5GR5SDktYw.woff2) format('woff2');
      unicode-range: U+1F00-1FFF;
    }

    /* greek */
    @font-face {
      font-family: 'EB Garamond';
      font-style: normal;
      font-weight: 700;
      src: url(https://fonts.gstatic.com/s/ebgaramond/v12/SlGUmQSNjdsmc35JDF1K5GR2SDktYw.woff2) format('woff2');
      unicode-range: U+0370-03FF;
    }

    /* vietnamese */
    @font-face {
      font-family: 'EB Garamond';
      font-style: normal;
      font-weight: 700;
      src: url(https://fonts.gstatic.com/s/ebgaramond/v12/SlGUmQSNjdsmc35JDF1K5GR6SDktYw.woff2) format('woff2');
      unicode-range: U+0102-0103, U+0110-0111, U+1EA0-1EF9, U+20AB;
    }

    /* latin-ext */
    @font-face {
      font-family: 'EB Garamond';
      font-style: normal;
      font-weight: 700;
      src: url(https://fonts.gstatic.com/s/ebgaramond/v12/SlGUmQSNjdsmc35JDF1K5GR7SDktYw.woff2) format('woff2');
      unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
    }

    /* latin */
    @font-face {
      font-family: 'EB Garamond';
      font-style: normal;
      font-weight: 700;
      src: url(https://fonts.gstatic.com/s/ebgaramond/v12/SlGUmQSNjdsmc35JDF1K5GR1SDk.woff2) format('woff2');
      unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
    }

    /* latin-ext */
    @font-face {
      font-family: 'Enriqueta';
      font-style: normal;
      font-weight: 400;
      src: local('Enriqueta Regular'), local('Enriqueta-Regular'), url(https://fonts.gstatic.com/s/enriqueta/v9/goksH6L7AUFrRvV44HVjQkqioP0.woff2) format('woff2');
      unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
    }

    /* latin */
    @font-face {
      font-family: 'Enriqueta';
      font-style: normal;
      font-weight: 400;
      src: local('Enriqueta Regular'), local('Enriqueta-Regular'), url(https://fonts.gstatic.com/s/enriqueta/v9/goksH6L7AUFrRvV44HVjTEqi.woff2) format('woff2');
      unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
    }

    /* latin-ext */
    @font-face {
      font-family: 'Enriqueta';
      font-style: normal;
      font-weight: 700;
      src: local('Enriqueta Bold'), local('Enriqueta-Bold'), url(https://fonts.gstatic.com/s/enriqueta/v9/gokpH6L7AUFrRvV44HVr92-3kdxFm6Q.woff2) format('woff2');
      unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
    }

    /* latin */
    @font-face {
      font-family: 'Enriqueta';
      font-style: normal;
      font-weight: 700;
      src: local('Enriqueta Bold'), local('Enriqueta-Bold'), url(https://fonts.gstatic.com/s/enriqueta/v9/gokpH6L7AUFrRvV44HVr92-3n9xF.woff2) format('woff2');
      unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
    }

    /* cyrillic-ext */
    @font-face {
      font-family: 'Forum';
      font-style: normal;
      font-weight: 400;
      src: local('Forum'), url(https://fonts.gstatic.com/s/forum/v10/6aey4Ky-Vb8Ew8IcOpIq3g.woff2) format('woff2');
      unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
    }

    /* cyrillic */
    @font-face {
      font-family: 'Forum';
      font-style: normal;
      font-weight: 400;
      src: local('Forum'), url(https://fonts.gstatic.com/s/forum/v10/6aey4Ky-Vb8Ew8IVOpIq3g.woff2) format('woff2');
      unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
    }

    /* latin-ext */
    @font-face {
      font-family: 'Forum';
      font-style: normal;
      font-weight: 400;
      src: local('Forum'), url(https://fonts.gstatic.com/s/forum/v10/6aey4Ky-Vb8Ew8IfOpIq3g.woff2) format('woff2');
      unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
    }

    /* latin */
    @font-face {
      font-family: 'Forum';
      font-style: normal;
      font-weight: 400;
      src: local('Forum'), url(https://fonts.gstatic.com/s/forum/v10/6aey4Ky-Vb8Ew8IROpI.woff2) format('woff2');
      unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
    }

    /* latin-ext */
    @font-face {
      font-family: 'Fredericka the Great';
      font-style: normal;
      font-weight: 400;
      src: local('Fredericka the Great'), local('FrederickatheGreat'), url(https://fonts.gstatic.com/s/frederickathegreat/v9/9Bt33CxNwt7aOctW2xjbCstzwVKsIBVV--StxbcVcg.woff2) format('woff2');
      unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
    }

    /* latin */
    @font-face {
      font-family: 'Fredericka the Great';
      font-style: normal;
      font-weight: 400;
      src: local('Fredericka the Great'), local('FrederickatheGreat'), url(https://fonts.gstatic.com/s/frederickathegreat/v9/9Bt33CxNwt7aOctW2xjbCstzwVKsIBVV--Sjxbc.woff2) format('woff2');
      unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
    }

    /* latin-ext */
    @font-face {
      font-family: 'Jockey One';
      font-style: normal;
      font-weight: 400;
      src: local('Jockey One'), local('JockeyOne-Regular'), url(https://fonts.gstatic.com/s/jockeyone/v9/HTxpL2g2KjCFj4x8WI6AnI_xHLOk.woff2) format('woff2');
      unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
    }

    /* latin */
    @font-face {
      font-family: 'Jockey One';
      font-style: normal;
      font-weight: 400;
      src: local('Jockey One'), local('JockeyOne-Regular'), url(https://fonts.gstatic.com/s/jockeyone/v9/HTxpL2g2KjCFj4x8WI6AnIHxHA.woff2) format('woff2');
      unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
    }

    /* latin */
    @font-face {
      font-family: 'Josefin Slab';
      font-style: italic;
      font-weight: 400;
      src: local('Josefin Slab Italic'), local('JosefinSlab-Italic'), url(https://fonts.gstatic.com/s/josefinslab/v10/lW-nwjwOK3Ps5GSJlNNkMalnrz6tDs8.woff2) format('woff2');
      unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
    }

    /* latin */
    @font-face {
      font-family: 'Josefin Slab';
      font-style: italic;
      font-weight: 700;
      src: local('Josefin Slab Bold Italic'), local('JosefinSlab-BoldItalic'), url(https://fonts.gstatic.com/s/josefinslab/v10/lW-kwjwOK3Ps5GSJlNNkMalnrzYWK9rnHg4.woff2) format('woff2');
      unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
    }

    /* latin */
    @font-face {
      font-family: 'Josefin Slab';
      font-style: normal;
      font-weight: 400;
      src: local('Josefin Slab Regular'), local('JosefinSlab-Regular'), url(https://fonts.gstatic.com/s/josefinslab/v10/lW-5wjwOK3Ps5GSJlNNkMalnqg6v.woff2) format('woff2');
      unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
    }

    /* latin */
    @font-face {
      font-family: 'Josefin Slab';
      font-style: normal;
      font-weight: 700;
      src: local('Josefin Slab Bold'), local('JosefinSlab-Bold'), url(https://fonts.gstatic.com/s/josefinslab/v10/lW-mwjwOK3Ps5GSJlNNkMalvESu6Kerl.woff2) format('woff2');
      unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
    }

    /* cyrillic-ext */
    @font-face {
      font-family: 'Jura';
      font-style: normal;
      font-weight: 400;
      src: url(https://fonts.gstatic.com/s/jura/v13/z7NbdRfiaC4VXclJURRD.woff2) format('woff2');
      unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
    }

    /* cyrillic */
    @font-face {
      font-family: 'Jura';
      font-style: normal;
      font-weight: 400;
      src: url(https://fonts.gstatic.com/s/jura/v13/z7NbdRfiaC4VXcBJURRD.woff2) format('woff2');
      unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
    }

    /* greek-ext */
    @font-face {
      font-family: 'Jura';
      font-style: normal;
      font-weight: 400;
      src: url(https://fonts.gstatic.com/s/jura/v13/z7NbdRfiaC4VXchJURRD.woff2) format('woff2');
      unicode-range: U+1F00-1FFF;
    }

    /* greek */
    @font-face {
      font-family: 'Jura';
      font-style: normal;
      font-weight: 400;
      src: url(https://fonts.gstatic.com/s/jura/v13/z7NbdRfiaC4VXcdJURRD.woff2) format('woff2');
      unicode-range: U+0370-03FF;
    }

    /* vietnamese */
    @font-face {
      font-family: 'Jura';
      font-style: normal;
      font-weight: 400;
      src: url(https://fonts.gstatic.com/s/jura/v13/z7NbdRfiaC4VXctJURRD.woff2) format('woff2');
      unicode-range: U+0102-0103, U+0110-0111, U+1EA0-1EF9, U+20AB;
    }

    /* latin-ext */
    @font-face {
      font-family: 'Jura';
      font-style: normal;
      font-weight: 400;
      src: url(https://fonts.gstatic.com/s/jura/v13/z7NbdRfiaC4VXcpJURRD.woff2) format('woff2');
      unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
    }

    /* latin */
    @font-face {
      font-family: 'Jura';
      font-style: normal;
      font-weight: 400;
      src: url(https://fonts.gstatic.com/s/jura/v13/z7NbdRfiaC4VXcRJUQ.woff2) format('woff2');
      unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
    }

    /* cyrillic-ext */
    @font-face {
      font-family: 'Jura';
      font-style: normal;
      font-weight: 700;
      src: url(https://fonts.gstatic.com/s/jura/v13/z7NbdRfiaC4VXclJURRD.woff2) format('woff2');
      unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
    }

    /* cyrillic */
    @font-face {
      font-family: 'Jura';
      font-style: normal;
      font-weight: 700;
      src: url(https://fonts.gstatic.com/s/jura/v13/z7NbdRfiaC4VXcBJURRD.woff2) format('woff2');
      unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
    }

    /* greek-ext */
    @font-face {
      font-family: 'Jura';
      font-style: normal;
      font-weight: 700;
      src: url(https://fonts.gstatic.com/s/jura/v13/z7NbdRfiaC4VXchJURRD.woff2) format('woff2');
      unicode-range: U+1F00-1FFF;
    }

    /* greek */
    @font-face {
      font-family: 'Jura';
      font-style: normal;
      font-weight: 700;
      src: url(https://fonts.gstatic.com/s/jura/v13/z7NbdRfiaC4VXcdJURRD.woff2) format('woff2');
      unicode-range: U+0370-03FF;
    }

    /* vietnamese */
    @font-face {
      font-family: 'Jura';
      font-style: normal;
      font-weight: 700;
      src: url(https://fonts.gstatic.com/s/jura/v13/z7NbdRfiaC4VXctJURRD.woff2) format('woff2');
      unicode-range: U+0102-0103, U+0110-0111, U+1EA0-1EF9, U+20AB;
    }

    /* latin-ext */
    @font-face {
      font-family: 'Jura';
      font-style: normal;
      font-weight: 700;
      src: url(https://fonts.gstatic.com/s/jura/v13/z7NbdRfiaC4VXcpJURRD.woff2) format('woff2');
      unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
    }

    /* latin */
    @font-face {
      font-family: 'Jura';
      font-style: normal;
      font-weight: 700;
      src: url(https://fonts.gstatic.com/s/jura/v13/z7NbdRfiaC4VXcRJUQ.woff2) format('woff2');
      unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
    }

    /* cyrillic */
    @font-face {
      font-family: 'Kelly Slab';
      font-style: normal;
      font-weight: 400;
      src: local('Kelly Slab'), local('KellySlab-Regular'), url(https://fonts.gstatic.com/s/kellyslab/v10/-W_7XJX0Rz3cxUnJC5t6fkALfq0k.woff2) format('woff2');
      unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
    }

    /* latin-ext */
    @font-face {
      font-family: 'Kelly Slab';
      font-style: normal;
      font-weight: 400;
      src: local('Kelly Slab'), local('KellySlab-Regular'), url(https://fonts.gstatic.com/s/kellyslab/v10/-W_7XJX0Rz3cxUnJC5t6fkoLfq0k.woff2) format('woff2');
      unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
    }

    /* latin */
    @font-face {
      font-family: 'Kelly Slab';
      font-style: normal;
      font-weight: 400;
      src: local('Kelly Slab'), local('KellySlab-Regular'), url(https://fonts.gstatic.com/s/kellyslab/v10/-W_7XJX0Rz3cxUnJC5t6fkQLfg.woff2) format('woff2');
      unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
    }

    /* latin-ext */
    @font-face {
      font-family: 'Lato';
      font-style: italic;
      font-weight: 400;
      src: local('Lato Italic'), local('Lato-Italic'), url(https://fonts.gstatic.com/s/lato/v16/S6u8w4BMUTPHjxsAUi-qJCY.woff2) format('woff2');
      unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
    }

    /* latin */
    @font-face {
      font-family: 'Lato';
      font-style: italic;
      font-weight: 400;
      src: local('Lato Italic'), local('Lato-Italic'), url(https://fonts.gstatic.com/s/lato/v16/S6u8w4BMUTPHjxsAXC-q.woff2) format('woff2');
      unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
    }

    /* latin-ext */
    @font-face {
      font-family: 'Lato';
      font-style: italic;
      font-weight: 700;
      src: local('Lato Bold Italic'), local('Lato-BoldItalic'), url(https://fonts.gstatic.com/s/lato/v16/S6u_w4BMUTPHjxsI5wq_FQft1dw.woff2) format('woff2');
      unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
    }

    /* latin */
    @font-face {
      font-family: 'Lato';
      font-style: italic;
      font-weight: 700;
      src: local('Lato Bold Italic'), local('Lato-BoldItalic'), url(https://fonts.gstatic.com/s/lato/v16/S6u_w4BMUTPHjxsI5wq_Gwft.woff2) format('woff2');
      unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
    }

    /* latin-ext */
    @font-face {
      font-family: 'Lato';
      font-style: normal;
      font-weight: 400;
      src: local('Lato Regular'), local('Lato-Regular'), url(https://fonts.gstatic.com/s/lato/v16/S6uyw4BMUTPHjxAwXjeu.woff2) format('woff2');
      unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
    }

    /* latin */
    @font-face {
      font-family: 'Lato';
      font-style: normal;
      font-weight: 400;
      src: local('Lato Regular'), local('Lato-Regular'), url(https://fonts.gstatic.com/s/lato/v16/S6uyw4BMUTPHjx4wXg.woff2) format('woff2');
      unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
    }

    /* latin-ext */
    @font-face {
      font-family: 'Lato';
      font-style: normal;
      font-weight: 700;
      src: local('Lato Bold'), local('Lato-Bold'), url(https://fonts.gstatic.com/s/lato/v16/S6u9w4BMUTPHh6UVSwaPGR_p.woff2) format('woff2');
      unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
    }

    /* latin */
    @font-face {
      font-family: 'Lato';
      font-style: normal;
      font-weight: 700;
      src: local('Lato Bold'), local('Lato-Bold'), url(https://fonts.gstatic.com/s/lato/v16/S6u9w4BMUTPHh6UVSwiPGQ.woff2) format('woff2');
      unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
    }

    /* latin-ext */
    @font-face {
      font-family: 'Libre Baskerville';
      font-style: italic;
      font-weight: 400;
      src: local('Libre Baskerville Italic'), local('LibreBaskerville-Italic'), url(https://fonts.gstatic.com/s/librebaskerville/v7/kmKhZrc3Hgbbcjq75U4uslyuy4kn0qNcWx8QDP2V.woff2) format('woff2');
      unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
    }

    /* latin */
    @font-face {
      font-family: 'Libre Baskerville';
      font-style: italic;
      font-weight: 400;
      src: local('Libre Baskerville Italic'), local('LibreBaskerville-Italic'), url(https://fonts.gstatic.com/s/librebaskerville/v7/kmKhZrc3Hgbbcjq75U4uslyuy4kn0qNcWxEQDA.woff2) format('woff2');
      unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
    }

    /* latin-ext */
    @font-face {
      font-family: 'Libre Baskerville';
      font-style: normal;
      font-weight: 400;
      src: local('Libre Baskerville'), local('LibreBaskerville-Regular'), url(https://fonts.gstatic.com/s/librebaskerville/v7/kmKnZrc3Hgbbcjq75U4uslyuy4kn0qNXaxMICA.woff2) format('woff2');
      unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
    }

    /* latin */
    @font-face {
      font-family: 'Libre Baskerville';
      font-style: normal;
      font-weight: 400;
      src: local('Libre Baskerville'), local('LibreBaskerville-Regular'), url(https://fonts.gstatic.com/s/librebaskerville/v7/kmKnZrc3Hgbbcjq75U4uslyuy4kn0qNZaxM.woff2) format('woff2');
      unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
    }

    /* latin-ext */
    @font-face {
      font-family: 'Libre Baskerville';
      font-style: normal;
      font-weight: 700;
      src: local('Libre Baskerville Bold'), local('LibreBaskerville-Bold'), url(https://fonts.gstatic.com/s/librebaskerville/v7/kmKiZrc3Hgbbcjq75U4uslyuy4kn0qviTgY5KcCsww.woff2) format('woff2');
      unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
    }

    /* latin */
    @font-face {
      font-family: 'Libre Baskerville';
      font-style: normal;
      font-weight: 700;
      src: local('Libre Baskerville Bold'), local('LibreBaskerville-Bold'), url(https://fonts.gstatic.com/s/librebaskerville/v7/kmKiZrc3Hgbbcjq75U4uslyuy4kn0qviTgY3KcA.woff2) format('woff2');
      unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
    }

    /* cyrillic-ext */
    @font-face {
      font-family: 'Lobster';
      font-style: normal;
      font-weight: 400;
      src: local('Lobster Regular'), local('Lobster-Regular'), url(https://fonts.gstatic.com/s/lobster/v22/neILzCirqoswsqX9zo-mM5Ez.woff2) format('woff2');
      unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
    }

    /* cyrillic */
    @font-face {
      font-family: 'Lobster';
      font-style: normal;
      font-weight: 400;
      src: local('Lobster Regular'), local('Lobster-Regular'), url(https://fonts.gstatic.com/s/lobster/v22/neILzCirqoswsqX9zoamM5Ez.woff2) format('woff2');
      unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
    }

    /* vietnamese */
    @font-face {
      font-family: 'Lobster';
      font-style: normal;
      font-weight: 400;
      src: local('Lobster Regular'), local('Lobster-Regular'), url(https://fonts.gstatic.com/s/lobster/v22/neILzCirqoswsqX9zo2mM5Ez.woff2) format('woff2');
      unicode-range: U+0102-0103, U+0110-0111, U+1EA0-1EF9, U+20AB;
    }

    /* latin-ext */
    @font-face {
      font-family: 'Lobster';
      font-style: normal;
      font-weight: 400;
      src: local('Lobster Regular'), local('Lobster-Regular'), url(https://fonts.gstatic.com/s/lobster/v22/neILzCirqoswsqX9zoymM5Ez.woff2) format('woff2');
      unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
    }

    /* latin */
    @font-face {
      font-family: 'Lobster';
      font-style: normal;
      font-weight: 400;
      src: local('Lobster Regular'), local('Lobster-Regular'), url(https://fonts.gstatic.com/s/lobster/v22/neILzCirqoswsqX9zoKmMw.woff2) format('woff2');
      unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
    }

    /* cyrillic */
    @font-face {
      font-family: 'Marck Script';
      font-style: normal;
      font-weight: 400;
      src: local('Marck Script'), local('MarckScript-Regular'), url(https://fonts.gstatic.com/s/marckscript/v10/nwpTtK2oNgBA3Or78gapdwuyzCg_WMM.woff2) format('woff2');
      unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
    }

    /* latin-ext */
    @font-face {
      font-family: 'Marck Script';
      font-style: normal;
      font-weight: 400;
      src: local('Marck Script'), local('MarckScript-Regular'), url(https://fonts.gstatic.com/s/marckscript/v10/nwpTtK2oNgBA3Or78gapdwuyxig_WMM.woff2) format('woff2');
      unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
    }

    /* latin */
    @font-face {
      font-family: 'Marck Script';
      font-style: normal;
      font-weight: 400;
      src: local('Marck Script'), local('MarckScript-Regular'), url(https://fonts.gstatic.com/s/marckscript/v10/nwpTtK2oNgBA3Or78gapdwuyyCg_.woff2) format('woff2');
      unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
    }

    /* latin */
    @font-face {
      font-family: 'Monoton';
      font-style: normal;
      font-weight: 400;
      src: local('Monoton'), local('Monoton-Regular'), url(https://fonts.gstatic.com/s/monoton/v9/5h1aiZUrOngCibe4TkHLQg.woff2) format('woff2');
      unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
    }

    /* cyrillic-ext */
    @font-face {
      font-family: 'Montserrat';
      font-style: italic;
      font-weight: 400;
      src: local('Montserrat Italic'), local('Montserrat-Italic'), url(https://fonts.gstatic.com/s/montserrat/v14/JTUQjIg1_i6t8kCHKm459WxRxC7mw9c.woff2) format('woff2');
      unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
    }

    /* cyrillic */
    @font-face {
      font-family: 'Montserrat';
      font-style: italic;
      font-weight: 400;
      src: local('Montserrat Italic'), local('Montserrat-Italic'), url(https://fonts.gstatic.com/s/montserrat/v14/JTUQjIg1_i6t8kCHKm459WxRzS7mw9c.woff2) format('woff2');
      unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
    }

    /* vietnamese */
    @font-face {
      font-family: 'Montserrat';
      font-style: italic;
      font-weight: 400;
      src: local('Montserrat Italic'), local('Montserrat-Italic'), url(https://fonts.gstatic.com/s/montserrat/v14/JTUQjIg1_i6t8kCHKm459WxRxi7mw9c.woff2) format('woff2');
      unicode-range: U+0102-0103, U+0110-0111, U+1EA0-1EF9, U+20AB;
    }

    /* latin-ext */
    @font-face {
      font-family: 'Montserrat';
      font-style: italic;
      font-weight: 400;
      src: local('Montserrat Italic'), local('Montserrat-Italic'), url(https://fonts.gstatic.com/s/montserrat/v14/JTUQjIg1_i6t8kCHKm459WxRxy7mw9c.woff2) format('woff2');
      unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
    }

    /* latin */
    @font-face {
      font-family: 'Montserrat';
      font-style: italic;
      font-weight: 400;
      src: local('Montserrat Italic'), local('Montserrat-Italic'), url(https://fonts.gstatic.com/s/montserrat/v14/JTUQjIg1_i6t8kCHKm459WxRyS7m.woff2) format('woff2');
      unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
    }

    /* cyrillic-ext */
    @font-face {
      font-family: 'Montserrat';
      font-style: italic;
      font-weight: 700;
      src: local('Montserrat Bold Italic'), local('Montserrat-BoldItalic'), url(https://fonts.gstatic.com/s/montserrat/v14/JTUPjIg1_i6t8kCHKm459WxZcgvz8fZwnCo.woff2) format('woff2');
      unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
    }

    /* cyrillic */
    @font-face {
      font-family: 'Montserrat';
      font-style: italic;
      font-weight: 700;
      src: local('Montserrat Bold Italic'), local('Montserrat-BoldItalic'), url(https://fonts.gstatic.com/s/montserrat/v14/JTUPjIg1_i6t8kCHKm459WxZcgvz-PZwnCo.woff2) format('woff2');
      unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
    }

    /* vietnamese */
    @font-face {
      font-family: 'Montserrat';
      font-style: italic;
      font-weight: 700;
      src: local('Montserrat Bold Italic'), local('Montserrat-BoldItalic'), url(https://fonts.gstatic.com/s/montserrat/v14/JTUPjIg1_i6t8kCHKm459WxZcgvz8_ZwnCo.woff2) format('woff2');
      unicode-range: U+0102-0103, U+0110-0111, U+1EA0-1EF9, U+20AB;
    }

    /* latin-ext */
    @font-face {
      font-family: 'Montserrat';
      font-style: italic;
      font-weight: 700;
      src: local('Montserrat Bold Italic'), local('Montserrat-BoldItalic'), url(https://fonts.gstatic.com/s/montserrat/v14/JTUPjIg1_i6t8kCHKm459WxZcgvz8vZwnCo.woff2) format('woff2');
      unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
    }

    /* latin */
    @font-face {
      font-family: 'Montserrat';
      font-style: italic;
      font-weight: 700;
      src: local('Montserrat Bold Italic'), local('Montserrat-BoldItalic'), url(https://fonts.gstatic.com/s/montserrat/v14/JTUPjIg1_i6t8kCHKm459WxZcgvz_PZw.woff2) format('woff2');
      unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
    }

    /* cyrillic-ext */
    @font-face {
      font-family: 'Montserrat';
      font-style: normal;
      font-weight: 400;
      src: local('Montserrat Regular'), local('Montserrat-Regular'), url(https://fonts.gstatic.com/s/montserrat/v14/JTUSjIg1_i6t8kCHKm459WRhyzbi.woff2) format('woff2');
      unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
    }

    /* cyrillic */
    @font-face {
      font-family: 'Montserrat';
      font-style: normal;
      font-weight: 400;
      src: local('Montserrat Regular'), local('Montserrat-Regular'), url(https://fonts.gstatic.com/s/montserrat/v14/JTUSjIg1_i6t8kCHKm459W1hyzbi.woff2) format('woff2');
      unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
    }

    /* vietnamese */
    @font-face {
      font-family: 'Montserrat';
      font-style: normal;
      font-weight: 400;
      src: local('Montserrat Regular'), local('Montserrat-Regular'), url(https://fonts.gstatic.com/s/montserrat/v14/JTUSjIg1_i6t8kCHKm459WZhyzbi.woff2) format('woff2');
      unicode-range: U+0102-0103, U+0110-0111, U+1EA0-1EF9, U+20AB;
    }

    /* latin-ext */
    @font-face {
      font-family: 'Montserrat';
      font-style: normal;
      font-weight: 400;
      src: local('Montserrat Regular'), local('Montserrat-Regular'), url(https://fonts.gstatic.com/s/montserrat/v14/JTUSjIg1_i6t8kCHKm459Wdhyzbi.woff2) format('woff2');
      unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
    }

    /* latin */
    @font-face {
      font-family: 'Montserrat';
      font-style: normal;
      font-weight: 400;
      src: local('Montserrat Regular'), local('Montserrat-Regular'), url(https://fonts.gstatic.com/s/montserrat/v14/JTUSjIg1_i6t8kCHKm459Wlhyw.woff2) format('woff2');
      unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
    }

    /* cyrillic-ext */
    @font-face {
      font-family: 'Montserrat';
      font-style: normal;
      font-weight: 700;
      src: local('Montserrat Bold'), local('Montserrat-Bold'), url(https://fonts.gstatic.com/s/montserrat/v14/JTURjIg1_i6t8kCHKm45_dJE3gTD_u50.woff2) format('woff2');
      unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
    }

    /* cyrillic */
    @font-face {
      font-family: 'Montserrat';
      font-style: normal;
      font-weight: 700;
      src: local('Montserrat Bold'), local('Montserrat-Bold'), url(https://fonts.gstatic.com/s/montserrat/v14/JTURjIg1_i6t8kCHKm45_dJE3g3D_u50.woff2) format('woff2');
      unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
    }

    /* vietnamese */
    @font-face {
      font-family: 'Montserrat';
      font-style: normal;
      font-weight: 700;
      src: local('Montserrat Bold'), local('Montserrat-Bold'), url(https://fonts.gstatic.com/s/montserrat/v14/JTURjIg1_i6t8kCHKm45_dJE3gbD_u50.woff2) format('woff2');
      unicode-range: U+0102-0103, U+0110-0111, U+1EA0-1EF9, U+20AB;
    }

    /* latin-ext */
    @font-face {
      font-family: 'Montserrat';
      font-style: normal;
      font-weight: 700;
      src: local('Montserrat Bold'), local('Montserrat-Bold'), url(https://fonts.gstatic.com/s/montserrat/v14/JTURjIg1_i6t8kCHKm45_dJE3gfD_u50.woff2) format('woff2');
      unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
    }

    /* latin */
    @font-face {
      font-family: 'Montserrat';
      font-style: normal;
      font-weight: 700;
      src: local('Montserrat Bold'), local('Montserrat-Bold'), url(https://fonts.gstatic.com/s/montserrat/v14/JTURjIg1_i6t8kCHKm45_dJE3gnD_g.woff2) format('woff2');
      unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
    }

    /* latin-ext */
    @font-face {
      font-family: 'Mr De Haviland';
      font-style: normal;
      font-weight: 400;
      src: local('Mr De Haviland Regular'), local('MrDeHaviland-Regular'), url(https://fonts.gstatic.com/s/mrdehaviland/v8/OpNVnooIhJj96FdB73296ksbOg3L60PlNQ.woff2) format('woff2');
      unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
    }

    /* latin */
    @font-face {
      font-family: 'Mr De Haviland';
      font-style: normal;
      font-weight: 400;
      src: local('Mr De Haviland Regular'), local('MrDeHaviland-Regular'), url(https://fonts.gstatic.com/s/mrdehaviland/v8/OpNVnooIhJj96FdB73296ksbOg3F60M.woff2) format('woff2');
      unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
    }

    /* latin-ext */
    @font-face {
      font-family: 'Niconne';
      font-style: normal;
      font-weight: 400;
      src: local('Niconne'), local('Niconne-Regular'), url(https://fonts.gstatic.com/s/niconne/v9/w8gaH2QvRug1_rTfnQKn2W4O.woff2) format('woff2');
      unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
    }

    /* latin */
    @font-face {
      font-family: 'Niconne';
      font-style: normal;
      font-weight: 400;
      src: local('Niconne'), local('Niconne-Regular'), url(https://fonts.gstatic.com/s/niconne/v9/w8gaH2QvRug1_rTfnQyn2Q.woff2) format('woff2');
      unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
    }

    /* vietnamese */
    @font-face {
      font-family: 'Noticia Text';
      font-style: italic;
      font-weight: 400;
      src: local('Noticia Text Italic'), local('NoticiaText-Italic'), url(https://fonts.gstatic.com/s/noticiatext/v9/VuJodNDF2Yv9qppOePKYRP12YwtVn07tpQ.woff2) format('woff2');
      unicode-range: U+0102-0103, U+0110-0111, U+1EA0-1EF9, U+20AB;
    }

    /* latin-ext */
    @font-face {
      font-family: 'Noticia Text';
      font-style: italic;
      font-weight: 400;
      src: local('Noticia Text Italic'), local('NoticiaText-Italic'), url(https://fonts.gstatic.com/s/noticiatext/v9/VuJodNDF2Yv9qppOePKYRP12YwtUn07tpQ.woff2) format('woff2');
      unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
    }

    /* latin */
    @font-face {
      font-family: 'Noticia Text';
      font-style: italic;
      font-weight: 400;
      src: local('Noticia Text Italic'), local('NoticiaText-Italic'), url(https://fonts.gstatic.com/s/noticiatext/v9/VuJodNDF2Yv9qppOePKYRP12Ywtan04.woff2) format('woff2');
      unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
    }

    /* vietnamese */
    @font-face {
      font-family: 'Noticia Text';
      font-style: italic;
      font-weight: 700;
      src: local('Noticia Text Bold Italic'), local('NoticiaText-BoldItalic'), url(https://fonts.gstatic.com/s/noticiatext/v9/VuJrdNDF2Yv9qppOePKYRP12YwPhulvdhDXUeA.woff2) format('woff2');
      unicode-range: U+0102-0103, U+0110-0111, U+1EA0-1EF9, U+20AB;
    }

    /* latin-ext */
    @font-face {
      font-family: 'Noticia Text';
      font-style: italic;
      font-weight: 700;
      src: local('Noticia Text Bold Italic'), local('NoticiaText-BoldItalic'), url(https://fonts.gstatic.com/s/noticiatext/v9/VuJrdNDF2Yv9qppOePKYRP12YwPhulvchDXUeA.woff2) format('woff2');
      unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
    }

    /* latin */
    @font-face {
      font-family: 'Noticia Text';
      font-style: italic;
      font-weight: 700;
      src: local('Noticia Text Bold Italic'), local('NoticiaText-BoldItalic'), url(https://fonts.gstatic.com/s/noticiatext/v9/VuJrdNDF2Yv9qppOePKYRP12YwPhulvShDU.woff2) format('woff2');
      unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
    }

    /* vietnamese */
    @font-face {
      font-family: 'Noticia Text';
      font-style: normal;
      font-weight: 400;
      src: local('Noticia Text'), local('NoticiaText-Regular'), url(https://fonts.gstatic.com/s/noticiatext/v9/VuJ2dNDF2Yv9qppOePKYRP12aTtYh0o.woff2) format('woff2');
      unicode-range: U+0102-0103, U+0110-0111, U+1EA0-1EF9, U+20AB;
    }

    /* latin-ext */
    @font-face {
      font-family: 'Noticia Text';
      font-style: normal;
      font-weight: 400;
      src: local('Noticia Text'), local('NoticiaText-Regular'), url(https://fonts.gstatic.com/s/noticiatext/v9/VuJ2dNDF2Yv9qppOePKYRP12aDtYh0o.woff2) format('woff2');
      unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
    }

    /* latin */
    @font-face {
      font-family: 'Noticia Text';
      font-style: normal;
      font-weight: 400;
      src: local('Noticia Text'), local('NoticiaText-Regular'), url(https://fonts.gstatic.com/s/noticiatext/v9/VuJ2dNDF2Yv9qppOePKYRP12ZjtY.woff2) format('woff2');
      unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
    }

    /* vietnamese */
    @font-face {
      font-family: 'Noticia Text';
      font-style: normal;
      font-weight: 700;
      src: local('Noticia Text Bold'), local('NoticiaText-Bold'), url(https://fonts.gstatic.com/s/noticiatext/v9/VuJpdNDF2Yv9qppOePKYRP1-3R5Nt2vQnDE.woff2) format('woff2');
      unicode-range: U+0102-0103, U+0110-0111, U+1EA0-1EF9, U+20AB;
    }

    /* latin-ext */
    @font-face {
      font-family: 'Noticia Text';
      font-style: normal;
      font-weight: 700;
      src: local('Noticia Text Bold'), local('NoticiaText-Bold'), url(https://fonts.gstatic.com/s/noticiatext/v9/VuJpdNDF2Yv9qppOePKYRP1-3R5NtmvQnDE.woff2) format('woff2');
      unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
    }

    /* latin */
    @font-face {
      font-family: 'Noticia Text';
      font-style: normal;
      font-weight: 700;
      src: local('Noticia Text Bold'), local('NoticiaText-Bold'), url(https://fonts.gstatic.com/s/noticiatext/v9/VuJpdNDF2Yv9qppOePKYRP1-3R5NuGvQ.woff2) format('woff2');
      unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
    }

    /* cyrillic-ext */
    @font-face {
      font-family: 'Open Sans Condensed';
      font-style: normal;
      font-weight: 300;
      src: local('Open Sans Condensed Light'), local('OpenSansCondensed-Light'), url(https://fonts.gstatic.com/s/opensanscondensed/v14/z7NFdQDnbTkabZAIOl9il_O6KJj73e7Ff1GhDujMR6WR.woff2) format('woff2');
      unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
    }

    /* cyrillic */
    @font-face {
      font-family: 'Open Sans Condensed';
      font-style: normal;
      font-weight: 300;
      src: local('Open Sans Condensed Light'), local('OpenSansCondensed-Light'), url(https://fonts.gstatic.com/s/opensanscondensed/v14/z7NFdQDnbTkabZAIOl9il_O6KJj73e7Ff1GhDuHMR6WR.woff2) format('woff2');
      unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
    }

    /* greek-ext */
    @font-face {
      font-family: 'Open Sans Condensed';
      font-style: normal;
      font-weight: 300;
      src: local('Open Sans Condensed Light'), local('OpenSansCondensed-Light'), url(https://fonts.gstatic.com/s/opensanscondensed/v14/z7NFdQDnbTkabZAIOl9il_O6KJj73e7Ff1GhDunMR6WR.woff2) format('woff2');
      unicode-range: U+1F00-1FFF;
    }

    /* greek */
    @font-face {
      font-family: 'Open Sans Condensed';
      font-style: normal;
      font-weight: 300;
      src: local('Open Sans Condensed Light'), local('OpenSansCondensed-Light'), url(https://fonts.gstatic.com/s/opensanscondensed/v14/z7NFdQDnbTkabZAIOl9il_O6KJj73e7Ff1GhDubMR6WR.woff2) format('woff2');
      unicode-range: U+0370-03FF;
    }

    /* vietnamese */
    @font-face {
      font-family: 'Open Sans Condensed';
      font-style: normal;
      font-weight: 300;
      src: local('Open Sans Condensed Light'), local('OpenSansCondensed-Light'), url(https://fonts.gstatic.com/s/opensanscondensed/v14/z7NFdQDnbTkabZAIOl9il_O6KJj73e7Ff1GhDurMR6WR.woff2) format('woff2');
      unicode-range: U+0102-0103, U+0110-0111, U+1EA0-1EF9, U+20AB;
    }

    /* latin-ext */
    @font-face {
      font-family: 'Open Sans Condensed';
      font-style: normal;
      font-weight: 300;
      src: local('Open Sans Condensed Light'), local('OpenSansCondensed-Light'), url(https://fonts.gstatic.com/s/opensanscondensed/v14/z7NFdQDnbTkabZAIOl9il_O6KJj73e7Ff1GhDuvMR6WR.woff2) format('woff2');
      unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
    }

    /* latin */
    @font-face {
      font-family: 'Open Sans Condensed';
      font-style: normal;
      font-weight: 300;
      src: local('Open Sans Condensed Light'), local('OpenSansCondensed-Light'), url(https://fonts.gstatic.com/s/opensanscondensed/v14/z7NFdQDnbTkabZAIOl9il_O6KJj73e7Ff1GhDuXMRw.woff2) format('woff2');
      unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
    }

    /* cyrillic-ext */
    @font-face {
      font-family: 'Open Sans Condensed';
      font-style: normal;
      font-weight: 700;
      src: local('Open Sans Condensed Bold'), local('OpenSansCondensed-Bold'), url(https://fonts.gstatic.com/s/opensanscondensed/v14/z7NFdQDnbTkabZAIOl9il_O6KJj73e7Ff0GmDujMR6WR.woff2) format('woff2');
      unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
    }

    /* cyrillic */
    @font-face {
      font-family: 'Open Sans Condensed';
      font-style: normal;
      font-weight: 700;
      src: local('Open Sans Condensed Bold'), local('OpenSansCondensed-Bold'), url(https://fonts.gstatic.com/s/opensanscondensed/v14/z7NFdQDnbTkabZAIOl9il_O6KJj73e7Ff0GmDuHMR6WR.woff2) format('woff2');
      unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
    }

    /* greek-ext */
    @font-face {
      font-family: 'Open Sans Condensed';
      font-style: normal;
      font-weight: 700;
      src: local('Open Sans Condensed Bold'), local('OpenSansCondensed-Bold'), url(https://fonts.gstatic.com/s/opensanscondensed/v14/z7NFdQDnbTkabZAIOl9il_O6KJj73e7Ff0GmDunMR6WR.woff2) format('woff2');
      unicode-range: U+1F00-1FFF;
    }

    /* greek */
    @font-face {
      font-family: 'Open Sans Condensed';
      font-style: normal;
      font-weight: 700;
      src: local('Open Sans Condensed Bold'), local('OpenSansCondensed-Bold'), url(https://fonts.gstatic.com/s/opensanscondensed/v14/z7NFdQDnbTkabZAIOl9il_O6KJj73e7Ff0GmDubMR6WR.woff2) format('woff2');
      unicode-range: U+0370-03FF;
    }

    /* vietnamese */
    @font-face {
      font-family: 'Open Sans Condensed';
      font-style: normal;
      font-weight: 700;
      src: local('Open Sans Condensed Bold'), local('OpenSansCondensed-Bold'), url(https://fonts.gstatic.com/s/opensanscondensed/v14/z7NFdQDnbTkabZAIOl9il_O6KJj73e7Ff0GmDurMR6WR.woff2) format('woff2');
      unicode-range: U+0102-0103, U+0110-0111, U+1EA0-1EF9, U+20AB;
    }

    /* latin-ext */
    @font-face {
      font-family: 'Open Sans Condensed';
      font-style: normal;
      font-weight: 700;
      src: local('Open Sans Condensed Bold'), local('OpenSansCondensed-Bold'), url(https://fonts.gstatic.com/s/opensanscondensed/v14/z7NFdQDnbTkabZAIOl9il_O6KJj73e7Ff0GmDuvMR6WR.woff2) format('woff2');
      unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
    }

    /* latin */
    @font-face {
      font-family: 'Open Sans Condensed';
      font-style: normal;
      font-weight: 700;
      src: local('Open Sans Condensed Bold'), local('OpenSansCondensed-Bold'), url(https://fonts.gstatic.com/s/opensanscondensed/v14/z7NFdQDnbTkabZAIOl9il_O6KJj73e7Ff0GmDuXMRw.woff2) format('woff2');
      unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
    }

    /* cyrillic-ext */
    @font-face {
      font-family: 'Oswald';
      font-style: normal;
      font-weight: 400;
      src: url(https://fonts.gstatic.com/s/oswald/v29/TK3iWkUHHAIjg752FD8Ghe4.woff2) format('woff2');
      unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
    }

    /* cyrillic */
    @font-face {
      font-family: 'Oswald';
      font-style: normal;
      font-weight: 400;
      src: url(https://fonts.gstatic.com/s/oswald/v29/TK3iWkUHHAIjg752HT8Ghe4.woff2) format('woff2');
      unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
    }

    /* vietnamese */
    @font-face {
      font-family: 'Oswald';
      font-style: normal;
      font-weight: 400;
      src: url(https://fonts.gstatic.com/s/oswald/v29/TK3iWkUHHAIjg752Fj8Ghe4.woff2) format('woff2');
      unicode-range: U+0102-0103, U+0110-0111, U+1EA0-1EF9, U+20AB;
    }

    /* latin-ext */
    @font-face {
      font-family: 'Oswald';
      font-style: normal;
      font-weight: 400;
      src: url(https://fonts.gstatic.com/s/oswald/v29/TK3iWkUHHAIjg752Fz8Ghe4.woff2) format('woff2');
      unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
    }

    /* latin */
    @font-face {
      font-family: 'Oswald';
      font-style: normal;
      font-weight: 400;
      src: url(https://fonts.gstatic.com/s/oswald/v29/TK3iWkUHHAIjg752GT8G.woff2) format('woff2');
      unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
    }

    /* cyrillic-ext */
    @font-face {
      font-family: 'Oswald';
      font-style: normal;
      font-weight: 700;
      src: url(https://fonts.gstatic.com/s/oswald/v29/TK3iWkUHHAIjg752FD8Ghe4.woff2) format('woff2');
      unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
    }

    /* cyrillic */
    @font-face {
      font-family: 'Oswald';
      font-style: normal;
      font-weight: 700;
      src: url(https://fonts.gstatic.com/s/oswald/v29/TK3iWkUHHAIjg752HT8Ghe4.woff2) format('woff2');
      unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
    }

    /* vietnamese */
    @font-face {
      font-family: 'Oswald';
      font-style: normal;
      font-weight: 700;
      src: url(https://fonts.gstatic.com/s/oswald/v29/TK3iWkUHHAIjg752Fj8Ghe4.woff2) format('woff2');
      unicode-range: U+0102-0103, U+0110-0111, U+1EA0-1EF9, U+20AB;
    }

    /* latin-ext */
    @font-face {
      font-family: 'Oswald';
      font-style: normal;
      font-weight: 700;
      src: url(https://fonts.gstatic.com/s/oswald/v29/TK3iWkUHHAIjg752Fz8Ghe4.woff2) format('woff2');
      unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
    }

    /* latin */
    @font-face {
      font-family: 'Oswald';
      font-style: normal;
      font-weight: 700;
      src: url(https://fonts.gstatic.com/s/oswald/v29/TK3iWkUHHAIjg752GT8G.woff2) format('woff2');
      unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
    }

    /* latin-ext */
    @font-face {
      font-family: 'Overlock';
      font-style: italic;
      font-weight: 400;
      src: local('Overlock Italic'), local('Overlock-Italic'), url(https://fonts.gstatic.com/s/overlock/v9/Z9XTDmdMWRiN1_T9Z7Tc2OCsk4GC.woff2) format('woff2');
      unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
    }

    /* latin */
    @font-face {
      font-family: 'Overlock';
      font-style: italic;
      font-weight: 400;
      src: local('Overlock Italic'), local('Overlock-Italic'), url(https://fonts.gstatic.com/s/overlock/v9/Z9XTDmdMWRiN1_T9Z7Tc2O6skw.woff2) format('woff2');
      unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
    }

    /* latin-ext */
    @font-face {
      font-family: 'Overlock';
      font-style: italic;
      font-weight: 700;
      src: local('Overlock Bold Italic'), local('Overlock-BoldItalic'), url(https://fonts.gstatic.com/s/overlock/v9/Z9XQDmdMWRiN1_T9Z7Tc0FWJhrCj8RLT.woff2) format('woff2');
      unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
    }

    /* latin */
    @font-face {
      font-family: 'Overlock';
      font-style: italic;
      font-weight: 700;
      src: local('Overlock Bold Italic'), local('Overlock-BoldItalic'), url(https://fonts.gstatic.com/s/overlock/v9/Z9XQDmdMWRiN1_T9Z7Tc0FWJhr6j8Q.woff2) format('woff2');
      unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
    }

    /* latin-ext */
    @font-face {
      font-family: 'Overlock';
      font-style: normal;
      font-weight: 400;
      src: local('Overlock Regular'), local('Overlock-Regular'), url(https://fonts.gstatic.com/s/overlock/v9/Z9XVDmdMWRiN1_T9Z7TX6Oy0lw.woff2) format('woff2');
      unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
    }

    /* latin */
    @font-face {
      font-family: 'Overlock';
      font-style: normal;
      font-weight: 400;
      src: local('Overlock Regular'), local('Overlock-Regular'), url(https://fonts.gstatic.com/s/overlock/v9/Z9XVDmdMWRiN1_T9Z7TZ6Ow.woff2) format('woff2');
      unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
    }

    /* latin-ext */
    @font-face {
      font-family: 'Overlock';
      font-style: normal;
      font-weight: 700;
      src: local('Overlock Bold'), local('Overlock-Bold'), url(https://fonts.gstatic.com/s/overlock/v9/Z9XSDmdMWRiN1_T9Z7xizfmFtry79Q.woff2) format('woff2');
      unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
    }

    /* latin */
    @font-face {
      font-family: 'Overlock';
      font-style: normal;
      font-weight: 700;
      src: local('Overlock Bold'), local('Overlock-Bold'), url(https://fonts.gstatic.com/s/overlock/v9/Z9XSDmdMWRiN1_T9Z7xizfmLtrw.woff2) format('woff2');
      unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
    }

    /* vietnamese */
    @font-face {
      font-family: 'Patrick Hand';
      font-style: normal;
      font-weight: 400;
      src: local('Patrick Hand'), local('PatrickHand-Regular'), url(https://fonts.gstatic.com/s/patrickhand/v13/LDI1apSQOAYtSuYWp8ZhfYe8UcLLq7s.woff2) format('woff2');
      unicode-range: U+0102-0103, U+0110-0111, U+1EA0-1EF9, U+20AB;
    }

    /* latin-ext */
    @font-face {
      font-family: 'Patrick Hand';
      font-style: normal;
      font-weight: 400;
      src: local('Patrick Hand'), local('PatrickHand-Regular'), url(https://fonts.gstatic.com/s/patrickhand/v13/LDI1apSQOAYtSuYWp8ZhfYe8UMLLq7s.woff2) format('woff2');
      unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
    }

    /* latin */
    @font-face {
      font-family: 'Patrick Hand';
      font-style: normal;
      font-weight: 400;
      src: local('Patrick Hand'), local('PatrickHand-Regular'), url(https://fonts.gstatic.com/s/patrickhand/v13/LDI1apSQOAYtSuYWp8ZhfYe8XsLL.woff2) format('woff2');
      unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
    }

    /* cyrillic-ext */
    @font-face {
      font-family: 'Play';
      font-style: normal;
      font-weight: 400;
      src: local('Play Regular'), local('Play-Regular'), url(https://fonts.gstatic.com/s/play/v11/6aez4K2oVqwIvtg2H68T.woff2) format('woff2');
      unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
    }

    /* cyrillic */
    @font-face {
      font-family: 'Play';
      font-style: normal;
      font-weight: 400;
      src: local('Play Regular'), local('Play-Regular'), url(https://fonts.gstatic.com/s/play/v11/6aez4K2oVqwIvtE2H68T.woff2) format('woff2');
      unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
    }

    /* greek */
    @font-face {
      font-family: 'Play';
      font-style: normal;
      font-weight: 400;
      src: local('Play Regular'), local('Play-Regular'), url(https://fonts.gstatic.com/s/play/v11/6aez4K2oVqwIvtY2H68T.woff2) format('woff2');
      unicode-range: U+0370-03FF;
    }

    /* vietnamese */
    @font-face {
      font-family: 'Play';
      font-style: normal;
      font-weight: 400;
      src: local('Play Regular'), local('Play-Regular'), url(https://fonts.gstatic.com/s/play/v11/6aez4K2oVqwIvto2H68T.woff2) format('woff2');
      unicode-range: U+0102-0103, U+0110-0111, U+1EA0-1EF9, U+20AB;
    }

    /* latin-ext */
    @font-face {
      font-family: 'Play';
      font-style: normal;
      font-weight: 400;
      src: local('Play Regular'), local('Play-Regular'), url(https://fonts.gstatic.com/s/play/v11/6aez4K2oVqwIvts2H68T.woff2) format('woff2');
      unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
    }

    /* latin */
    @font-face {
      font-family: 'Play';
      font-style: normal;
      font-weight: 400;
      src: local('Play Regular'), local('Play-Regular'), url(https://fonts.gstatic.com/s/play/v11/6aez4K2oVqwIvtU2Hw.woff2) format('woff2');
      unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
    }

    /* cyrillic-ext */
    @font-face {
      font-family: 'Play';
      font-style: normal;
      font-weight: 700;
      src: local('Play Bold'), local('Play-Bold'), url(https://fonts.gstatic.com/s/play/v11/6ae84K2oVqwItm4TCp0y2knT.woff2) format('woff2');
      unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
    }

    /* cyrillic */
    @font-face {
      font-family: 'Play';
      font-style: normal;
      font-weight: 700;
      src: local('Play Bold'), local('Play-Bold'), url(https://fonts.gstatic.com/s/play/v11/6ae84K2oVqwItm4TCpQy2knT.woff2) format('woff2');
      unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
    }

    /* greek */
    @font-face {
      font-family: 'Play';
      font-style: normal;
      font-weight: 700;
      src: local('Play Bold'), local('Play-Bold'), url(https://fonts.gstatic.com/s/play/v11/6ae84K2oVqwItm4TCpMy2knT.woff2) format('woff2');
      unicode-range: U+0370-03FF;
    }

    /* vietnamese */
    @font-face {
      font-family: 'Play';
      font-style: normal;
      font-weight: 700;
      src: local('Play Bold'), local('Play-Bold'), url(https://fonts.gstatic.com/s/play/v11/6ae84K2oVqwItm4TCp8y2knT.woff2) format('woff2');
      unicode-range: U+0102-0103, U+0110-0111, U+1EA0-1EF9, U+20AB;
    }

    /* latin-ext */
    @font-face {
      font-family: 'Play';
      font-style: normal;
      font-weight: 700;
      src: local('Play Bold'), local('Play-Bold'), url(https://fonts.gstatic.com/s/play/v11/6ae84K2oVqwItm4TCp4y2knT.woff2) format('woff2');
      unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
    }

    /* latin */
    @font-face {
      font-family: 'Play';
      font-style: normal;
      font-weight: 700;
      src: local('Play Bold'), local('Play-Bold'), url(https://fonts.gstatic.com/s/play/v11/6ae84K2oVqwItm4TCpAy2g.woff2) format('woff2');
      unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
    }

    /* cyrillic */
    @font-face {
      font-family: 'Playfair Display';
      font-style: italic;
      font-weight: 400;
      src: local('Playfair Display Italic'), local('PlayfairDisplay-Italic'), url(https://fonts.gstatic.com/s/playfairdisplay/v15/nuFkD-vYSZviVYUb_rj3ij__anPXDTnohkk72xU.woff2) format('woff2');
      unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
    }

    /* vietnamese */
    @font-face {
      font-family: 'Playfair Display';
      font-style: italic;
      font-weight: 400;
      src: local('Playfair Display Italic'), local('PlayfairDisplay-Italic'), url(https://fonts.gstatic.com/s/playfairdisplay/v15/nuFkD-vYSZviVYUb_rj3ij__anPXDTnojUk72xU.woff2) format('woff2');
      unicode-range: U+0102-0103, U+0110-0111, U+1EA0-1EF9, U+20AB;
    }

    /* latin-ext */
    @font-face {
      font-family: 'Playfair Display';
      font-style: italic;
      font-weight: 400;
      src: local('Playfair Display Italic'), local('PlayfairDisplay-Italic'), url(https://fonts.gstatic.com/s/playfairdisplay/v15/nuFkD-vYSZviVYUb_rj3ij__anPXDTnojEk72xU.woff2) format('woff2');
      unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
    }

    /* latin */
    @font-face {
      font-family: 'Playfair Display';
      font-style: italic;
      font-weight: 400;
      src: local('Playfair Display Italic'), local('PlayfairDisplay-Italic'), url(https://fonts.gstatic.com/s/playfairdisplay/v15/nuFkD-vYSZviVYUb_rj3ij__anPXDTnogkk7.woff2) format('woff2');
      unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
    }

    /* cyrillic */
    @font-face {
      font-family: 'Playfair Display';
      font-style: italic;
      font-weight: 700;
      src: local('Playfair Display Bold Italic'), local('PlayfairDisplay-BoldItalic'), url(https://fonts.gstatic.com/s/playfairdisplay/v15/nuFnD-vYSZviVYUb_rj3ij__anPXDTngOWwu4DRmBKY.woff2) format('woff2');
      unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
    }

    /* vietnamese */
    @font-face {
      font-family: 'Playfair Display';
      font-style: italic;
      font-weight: 700;
      src: local('Playfair Display Bold Italic'), local('PlayfairDisplay-BoldItalic'), url(https://fonts.gstatic.com/s/playfairdisplay/v15/nuFnD-vYSZviVYUb_rj3ij__anPXDTngOWwu6zRmBKY.woff2) format('woff2');
      unicode-range: U+0102-0103, U+0110-0111, U+1EA0-1EF9, U+20AB;
    }

    /* latin-ext */
    @font-face {
      font-family: 'Playfair Display';
      font-style: italic;
      font-weight: 700;
      src: local('Playfair Display Bold Italic'), local('PlayfairDisplay-BoldItalic'), url(https://fonts.gstatic.com/s/playfairdisplay/v15/nuFnD-vYSZviVYUb_rj3ij__anPXDTngOWwu6jRmBKY.woff2) format('woff2');
      unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
    }

    /* latin */
    @font-face {
      font-family: 'Playfair Display';
      font-style: italic;
      font-weight: 700;
      src: local('Playfair Display Bold Italic'), local('PlayfairDisplay-BoldItalic'), url(https://fonts.gstatic.com/s/playfairdisplay/v15/nuFnD-vYSZviVYUb_rj3ij__anPXDTngOWwu5DRm.woff2) format('woff2');
      unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
    }

    /* cyrillic */
    @font-face {
      font-family: 'Playfair Display';
      font-style: normal;
      font-weight: 400;
      src: local('Playfair Display Regular'), local('PlayfairDisplay-Regular'), url(https://fonts.gstatic.com/s/playfairdisplay/v15/nuFiD-vYSZviVYUb_rj3ij__anPXDTjYgFE_.woff2) format('woff2');
      unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
    }

    /* vietnamese */
    @font-face {
      font-family: 'Playfair Display';
      font-style: normal;
      font-weight: 400;
      src: local('Playfair Display Regular'), local('PlayfairDisplay-Regular'), url(https://fonts.gstatic.com/s/playfairdisplay/v15/nuFiD-vYSZviVYUb_rj3ij__anPXDTPYgFE_.woff2) format('woff2');
      unicode-range: U+0102-0103, U+0110-0111, U+1EA0-1EF9, U+20AB;
    }

    /* latin-ext */
    @font-face {
      font-family: 'Playfair Display';
      font-style: normal;
      font-weight: 400;
      src: local('Playfair Display Regular'), local('PlayfairDisplay-Regular'), url(https://fonts.gstatic.com/s/playfairdisplay/v15/nuFiD-vYSZviVYUb_rj3ij__anPXDTLYgFE_.woff2) format('woff2');
      unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
    }

    /* latin */
    @font-face {
      font-family: 'Playfair Display';
      font-style: normal;
      font-weight: 400;
      src: local('Playfair Display Regular'), local('PlayfairDisplay-Regular'), url(https://fonts.gstatic.com/s/playfairdisplay/v15/nuFiD-vYSZviVYUb_rj3ij__anPXDTzYgA.woff2) format('woff2');
      unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
    }

    /* cyrillic */
    @font-face {
      font-family: 'Playfair Display';
      font-style: normal;
      font-weight: 700;
      src: local('Playfair Display Bold'), local('PlayfairDisplay-Bold'), url(https://fonts.gstatic.com/s/playfairdisplay/v15/nuFlD-vYSZviVYUb_rj3ij__anPXBYf9lWoe5ixi.woff2) format('woff2');
      unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
    }

    /* vietnamese */
    @font-face {
      font-family: 'Playfair Display';
      font-style: normal;
      font-weight: 700;
      src: local('Playfair Display Bold'), local('PlayfairDisplay-Bold'), url(https://fonts.gstatic.com/s/playfairdisplay/v15/nuFlD-vYSZviVYUb_rj3ij__anPXBYf9lWEe5ixi.woff2) format('woff2');
      unicode-range: U+0102-0103, U+0110-0111, U+1EA0-1EF9, U+20AB;
    }

    /* latin-ext */
    @font-face {
      font-family: 'Playfair Display';
      font-style: normal;
      font-weight: 700;
      src: local('Playfair Display Bold'), local('PlayfairDisplay-Bold'), url(https://fonts.gstatic.com/s/playfairdisplay/v15/nuFlD-vYSZviVYUb_rj3ij__anPXBYf9lWAe5ixi.woff2) format('woff2');
      unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
    }

    /* latin */
    @font-face {
      font-family: 'Playfair Display';
      font-style: normal;
      font-weight: 700;
      src: local('Playfair Display Bold'), local('PlayfairDisplay-Bold'), url(https://fonts.gstatic.com/s/playfairdisplay/v15/nuFlD-vYSZviVYUb_rj3ij__anPXBYf9lW4e5g.woff2) format('woff2');
      unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
    }

    /* devanagari */
    @font-face {
      font-family: 'Poppins';
      font-style: italic;
      font-weight: 400;
      src: local('Poppins Italic'), local('Poppins-Italic'), url(https://fonts.gstatic.com/s/poppins/v9/pxiGyp8kv8JHgFVrJJLucXtAKPY.woff2) format('woff2');
      unicode-range: U+0900-097F, U+1CD0-1CF6, U+1CF8-1CF9, U+200C-200D, U+20A8, U+20B9, U+25CC, U+A830-A839, U+A8E0-A8FB;
    }

    /* latin-ext */
    @font-face {
      font-family: 'Poppins';
      font-style: italic;
      font-weight: 400;
      src: local('Poppins Italic'), local('Poppins-Italic'), url(https://fonts.gstatic.com/s/poppins/v9/pxiGyp8kv8JHgFVrJJLufntAKPY.woff2) format('woff2');
      unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
    }

    /* latin */
    @font-face {
      font-family: 'Poppins';
      font-style: italic;
      font-weight: 400;
      src: local('Poppins Italic'), local('Poppins-Italic'), url(https://fonts.gstatic.com/s/poppins/v9/pxiGyp8kv8JHgFVrJJLucHtA.woff2) format('woff2');
      unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
    }

    /* devanagari */
    @font-face {
      font-family: 'Poppins';
      font-style: italic;
      font-weight: 700;
      src: local('Poppins Bold Italic'), local('Poppins-BoldItalic'), url(https://fonts.gstatic.com/s/poppins/v9/pxiDyp8kv8JHgFVrJJLmy15VFteOcEg.woff2) format('woff2');
      unicode-range: U+0900-097F, U+1CD0-1CF6, U+1CF8-1CF9, U+200C-200D, U+20A8, U+20B9, U+25CC, U+A830-A839, U+A8E0-A8FB;
    }

    /* latin-ext */
    @font-face {
      font-family: 'Poppins';
      font-style: italic;
      font-weight: 700;
      src: local('Poppins Bold Italic'), local('Poppins-BoldItalic'), url(https://fonts.gstatic.com/s/poppins/v9/pxiDyp8kv8JHgFVrJJLmy15VGdeOcEg.woff2) format('woff2');
      unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
    }

    /* latin */
    @font-face {
      font-family: 'Poppins';
      font-style: italic;
      font-weight: 700;
      src: local('Poppins Bold Italic'), local('Poppins-BoldItalic'), url(https://fonts.gstatic.com/s/poppins/v9/pxiDyp8kv8JHgFVrJJLmy15VF9eO.woff2) format('woff2');
      unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
    }

    /* devanagari */
    @font-face {
      font-family: 'Poppins';
      font-style: normal;
      font-weight: 400;
      src: local('Poppins Regular'), local('Poppins-Regular'), url(https://fonts.gstatic.com/s/poppins/v9/pxiEyp8kv8JHgFVrJJbecmNE.woff2) format('woff2');
      unicode-range: U+0900-097F, U+1CD0-1CF6, U+1CF8-1CF9, U+200C-200D, U+20A8, U+20B9, U+25CC, U+A830-A839, U+A8E0-A8FB;
    }

    /* latin-ext */
    @font-face {
      font-family: 'Poppins';
      font-style: normal;
      font-weight: 400;
      src: local('Poppins Regular'), local('Poppins-Regular'), url(https://fonts.gstatic.com/s/poppins/v9/pxiEyp8kv8JHgFVrJJnecmNE.woff2) format('woff2');
      unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
    }

    /* latin */
    @font-face {
      font-family: 'Poppins';
      font-style: normal;
      font-weight: 400;
      src: local('Poppins Regular'), local('Poppins-Regular'), url(https://fonts.gstatic.com/s/poppins/v9/pxiEyp8kv8JHgFVrJJfecg.woff2) format('woff2');
      unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
    }

    /* devanagari */
    @font-face {
      font-family: 'Poppins';
      font-style: normal;
      font-weight: 700;
      src: local('Poppins Bold'), local('Poppins-Bold'), url(https://fonts.gstatic.com/s/poppins/v9/pxiByp8kv8JHgFVrLCz7Z11lFc-K.woff2) format('woff2');
      unicode-range: U+0900-097F, U+1CD0-1CF6, U+1CF8-1CF9, U+200C-200D, U+20A8, U+20B9, U+25CC, U+A830-A839, U+A8E0-A8FB;
    }

    /* latin-ext */
    @font-face {
      font-family: 'Poppins';
      font-style: normal;
      font-weight: 700;
      src: local('Poppins Bold'), local('Poppins-Bold'), url(https://fonts.gstatic.com/s/poppins/v9/pxiByp8kv8JHgFVrLCz7Z1JlFc-K.woff2) format('woff2');
      unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
    }

    /* latin */
    @font-face {
      font-family: 'Poppins';
      font-style: normal;
      font-weight: 700;
      src: local('Poppins Bold'), local('Poppins-Bold'), url(https://fonts.gstatic.com/s/poppins/v9/pxiByp8kv8JHgFVrLCz7Z1xlFQ.woff2) format('woff2');
      unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
    }

    /* latin */
    @font-face {
      font-family: 'Questrial';
      font-style: normal;
      font-weight: 400;
      src: local('Questrial'), local('Questrial-Regular'), url(https://fonts.gstatic.com/s/questrial/v9/QdVUSTchPBm7nuUeVf70viFl.woff2) format('woff2');
      unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
    }

    /* latin-ext */
    @font-face {
      font-family: 'Raleway';
      font-style: italic;
      font-weight: 400;
      src: local('Raleway Italic'), local('Raleway-Italic'), url(https://fonts.gstatic.com/s/raleway/v14/1Ptsg8zYS_SKggPNyCg4Q4FqPfE.woff2) format('woff2');
      unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
    }

    /* latin */
    @font-face {
      font-family: 'Raleway';
      font-style: italic;
      font-weight: 400;
      src: local('Raleway Italic'), local('Raleway-Italic'), url(https://fonts.gstatic.com/s/raleway/v14/1Ptsg8zYS_SKggPNyCg4TYFq.woff2) format('woff2');
      unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
    }

    /* latin-ext */
    @font-face {
      font-family: 'Raleway';
      font-style: italic;
      font-weight: 700;
      src: local('Raleway Bold Italic'), local('Raleway-BoldItalic'), url(https://fonts.gstatic.com/s/raleway/v14/1Ptpg8zYS_SKggPNyCgw9qR_DNCb_Vo.woff2) format('woff2');
      unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
    }

    /* latin */
    @font-face {
      font-family: 'Raleway';
      font-style: italic;
      font-weight: 700;
      src: local('Raleway Bold Italic'), local('Raleway-BoldItalic'), url(https://fonts.gstatic.com/s/raleway/v14/1Ptpg8zYS_SKggPNyCgw9qR_AtCb.woff2) format('woff2');
      unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
    }

    /* latin-ext */
    @font-face {
      font-family: 'Raleway';
      font-style: normal;
      font-weight: 400;
      src: local('Raleway'), local('Raleway-Regular'), url(https://fonts.gstatic.com/s/raleway/v14/1Ptug8zYS_SKggPNyCMIT5lu.woff2) format('woff2');
      unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
    }

    /* latin */
    @font-face {
      font-family: 'Raleway';
      font-style: normal;
      font-weight: 400;
      src: local('Raleway'), local('Raleway-Regular'), url(https://fonts.gstatic.com/s/raleway/v14/1Ptug8zYS_SKggPNyC0ITw.woff2) format('woff2');
      unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
    }

    /* latin-ext */
    @font-face {
      font-family: 'Raleway';
      font-style: normal;
      font-weight: 700;
      src: local('Raleway Bold'), local('Raleway-Bold'), url(https://fonts.gstatic.com/s/raleway/v14/1Ptrg8zYS_SKggPNwJYtWqhPAMif.woff2) format('woff2');
      unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
    }

    /* latin */
    @font-face {
      font-family: 'Raleway';
      font-style: normal;
      font-weight: 700;
      src: local('Raleway Bold'), local('Raleway-Bold'), url(https://fonts.gstatic.com/s/raleway/v14/1Ptrg8zYS_SKggPNwJYtWqZPAA.woff2) format('woff2');
      unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
    }

    /* cyrillic-ext */
    @font-face {
      font-family: 'Roboto';
      font-style: italic;
      font-weight: 400;
      src: local('Roboto Italic'), local('Roboto-Italic'), url(https://fonts.gstatic.com/s/roboto/v20/KFOkCnqEu92Fr1Mu51xFIzIFKw.woff2) format('woff2');
      unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
    }

    /* cyrillic */
    @font-face {
      font-family: 'Roboto';
      font-style: italic;
      font-weight: 400;
      src: local('Roboto Italic'), local('Roboto-Italic'), url(https://fonts.gstatic.com/s/roboto/v20/KFOkCnqEu92Fr1Mu51xMIzIFKw.woff2) format('woff2');
      unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
    }

    /* greek-ext */
    @font-face {
      font-family: 'Roboto';
      font-style: italic;
      font-weight: 400;
      src: local('Roboto Italic'), local('Roboto-Italic'), url(https://fonts.gstatic.com/s/roboto/v20/KFOkCnqEu92Fr1Mu51xEIzIFKw.woff2) format('woff2');
      unicode-range: U+1F00-1FFF;
    }

    /* greek */
    @font-face {
      font-family: 'Roboto';
      font-style: italic;
      font-weight: 400;
      src: local('Roboto Italic'), local('Roboto-Italic'), url(https://fonts.gstatic.com/s/roboto/v20/KFOkCnqEu92Fr1Mu51xLIzIFKw.woff2) format('woff2');
      unicode-range: U+0370-03FF;
    }

    /* vietnamese */
    @font-face {
      font-family: 'Roboto';
      font-style: italic;
      font-weight: 400;
      src: local('Roboto Italic'), local('Roboto-Italic'), url(https://fonts.gstatic.com/s/roboto/v20/KFOkCnqEu92Fr1Mu51xHIzIFKw.woff2) format('woff2');
      unicode-range: U+0102-0103, U+0110-0111, U+1EA0-1EF9, U+20AB;
    }

    /* latin-ext */
    @font-face {
      font-family: 'Roboto';
      font-style: italic;
      font-weight: 400;
      src: local('Roboto Italic'), local('Roboto-Italic'), url(https://fonts.gstatic.com/s/roboto/v20/KFOkCnqEu92Fr1Mu51xGIzIFKw.woff2) format('woff2');
      unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
    }

    /* latin */
    @font-face {
      font-family: 'Roboto';
      font-style: italic;
      font-weight: 400;
      src: local('Roboto Italic'), local('Roboto-Italic'), url(https://fonts.gstatic.com/s/roboto/v20/KFOkCnqEu92Fr1Mu51xIIzI.woff2) format('woff2');
      unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
    }

    /* cyrillic-ext */
    @font-face {
      font-family: 'Roboto';
      font-style: italic;
      font-weight: 700;
      src: local('Roboto Bold Italic'), local('Roboto-BoldItalic'), url(https://fonts.gstatic.com/s/roboto/v20/KFOjCnqEu92Fr1Mu51TzBic3CsTKlA.woff2) format('woff2');
      unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
    }

    /* cyrillic */
    @font-face {
      font-family: 'Roboto';
      font-style: italic;
      font-weight: 700;
      src: local('Roboto Bold Italic'), local('Roboto-BoldItalic'), url(https://fonts.gstatic.com/s/roboto/v20/KFOjCnqEu92Fr1Mu51TzBic-CsTKlA.woff2) format('woff2');
      unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
    }

    /* greek-ext */
    @font-face {
      font-family: 'Roboto';
      font-style: italic;
      font-weight: 700;
      src: local('Roboto Bold Italic'), local('Roboto-BoldItalic'), url(https://fonts.gstatic.com/s/roboto/v20/KFOjCnqEu92Fr1Mu51TzBic2CsTKlA.woff2) format('woff2');
      unicode-range: U+1F00-1FFF;
    }

    /* greek */
    @font-face {
      font-family: 'Roboto';
      font-style: italic;
      font-weight: 700;
      src: local('Roboto Bold Italic'), local('Roboto-BoldItalic'), url(https://fonts.gstatic.com/s/roboto/v20/KFOjCnqEu92Fr1Mu51TzBic5CsTKlA.woff2) format('woff2');
      unicode-range: U+0370-03FF;
    }

    /* vietnamese */
    @font-face {
      font-family: 'Roboto';
      font-style: italic;
      font-weight: 700;
      src: local('Roboto Bold Italic'), local('Roboto-BoldItalic'), url(https://fonts.gstatic.com/s/roboto/v20/KFOjCnqEu92Fr1Mu51TzBic1CsTKlA.woff2) format('woff2');
      unicode-range: U+0102-0103, U+0110-0111, U+1EA0-1EF9, U+20AB;
    }

    /* latin-ext */
    @font-face {
      font-family: 'Roboto';
      font-style: italic;
      font-weight: 700;
      src: local('Roboto Bold Italic'), local('Roboto-BoldItalic'), url(https://fonts.gstatic.com/s/roboto/v20/KFOjCnqEu92Fr1Mu51TzBic0CsTKlA.woff2) format('woff2');
      unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
    }

    /* latin */
    @font-face {
      font-family: 'Roboto';
      font-style: italic;
      font-weight: 700;
      src: local('Roboto Bold Italic'), local('Roboto-BoldItalic'), url(https://fonts.gstatic.com/s/roboto/v20/KFOjCnqEu92Fr1Mu51TzBic6CsQ.woff2) format('woff2');
      unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
    }

    /* cyrillic-ext */
    @font-face {
      font-family: 'Roboto';
      font-style: normal;
      font-weight: 400;
      src: local('Roboto'), local('Roboto-Regular'), url(https://fonts.gstatic.com/s/roboto/v20/KFOmCnqEu92Fr1Mu72xKOzY.woff2) format('woff2');
      unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
    }

    /* cyrillic */
    @font-face {
      font-family: 'Roboto';
      font-style: normal;
      font-weight: 400;
      src: local('Roboto'), local('Roboto-Regular'), url(https://fonts.gstatic.com/s/roboto/v20/KFOmCnqEu92Fr1Mu5mxKOzY.woff2) format('woff2');
      unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
    }

    /* greek-ext */
    @font-face {
      font-family: 'Roboto';
      font-style: normal;
      font-weight: 400;
      src: local('Roboto'), local('Roboto-Regular'), url(https://fonts.gstatic.com/s/roboto/v20/KFOmCnqEu92Fr1Mu7mxKOzY.woff2) format('woff2');
      unicode-range: U+1F00-1FFF;
    }

    /* greek */
    @font-face {
      font-family: 'Roboto';
      font-style: normal;
      font-weight: 400;
      src: local('Roboto'), local('Roboto-Regular'), url(https://fonts.gstatic.com/s/roboto/v20/KFOmCnqEu92Fr1Mu4WxKOzY.woff2) format('woff2');
      unicode-range: U+0370-03FF;
    }

    /* vietnamese */
    @font-face {
      font-family: 'Roboto';
      font-style: normal;
      font-weight: 400;
      src: local('Roboto'), local('Roboto-Regular'), url(https://fonts.gstatic.com/s/roboto/v20/KFOmCnqEu92Fr1Mu7WxKOzY.woff2) format('woff2');
      unicode-range: U+0102-0103, U+0110-0111, U+1EA0-1EF9, U+20AB;
    }

    /* latin-ext */
    @font-face {
      font-family: 'Roboto';
      font-style: normal;
      font-weight: 400;
      src: local('Roboto'), local('Roboto-Regular'), url(https://fonts.gstatic.com/s/roboto/v20/KFOmCnqEu92Fr1Mu7GxKOzY.woff2) format('woff2');
      unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
    }

    /* latin */
    @font-face {
      font-family: 'Roboto';
      font-style: normal;
      font-weight: 400;
      src: local('Roboto'), local('Roboto-Regular'), url(https://fonts.gstatic.com/s/roboto/v20/KFOmCnqEu92Fr1Mu4mxK.woff2) format('woff2');
      unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
    }

    /* cyrillic-ext */
    @font-face {
      font-family: 'Roboto';
      font-style: normal;
      font-weight: 700;
      src: local('Roboto Bold'), local('Roboto-Bold'), url(https://fonts.gstatic.com/s/roboto/v20/KFOlCnqEu92Fr1MmWUlfCRc4EsA.woff2) format('woff2');
      unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
    }

    /* cyrillic */
    @font-face {
      font-family: 'Roboto';
      font-style: normal;
      font-weight: 700;
      src: local('Roboto Bold'), local('Roboto-Bold'), url(https://fonts.gstatic.com/s/roboto/v20/KFOlCnqEu92Fr1MmWUlfABc4EsA.woff2) format('woff2');
      unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
    }

    /* greek-ext */
    @font-face {
      font-family: 'Roboto';
      font-style: normal;
      font-weight: 700;
      src: local('Roboto Bold'), local('Roboto-Bold'), url(https://fonts.gstatic.com/s/roboto/v20/KFOlCnqEu92Fr1MmWUlfCBc4EsA.woff2) format('woff2');
      unicode-range: U+1F00-1FFF;
    }

    /* greek */
    @font-face {
      font-family: 'Roboto';
      font-style: normal;
      font-weight: 700;
      src: local('Roboto Bold'), local('Roboto-Bold'), url(https://fonts.gstatic.com/s/roboto/v20/KFOlCnqEu92Fr1MmWUlfBxc4EsA.woff2) format('woff2');
      unicode-range: U+0370-03FF;
    }

    /* vietnamese */
    @font-face {
      font-family: 'Roboto';
      font-style: normal;
      font-weight: 700;
      src: local('Roboto Bold'), local('Roboto-Bold'), url(https://fonts.gstatic.com/s/roboto/v20/KFOlCnqEu92Fr1MmWUlfCxc4EsA.woff2) format('woff2');
      unicode-range: U+0102-0103, U+0110-0111, U+1EA0-1EF9, U+20AB;
    }

    /* latin-ext */
    @font-face {
      font-family: 'Roboto';
      font-style: normal;
      font-weight: 700;
      src: local('Roboto Bold'), local('Roboto-Bold'), url(https://fonts.gstatic.com/s/roboto/v20/KFOlCnqEu92Fr1MmWUlfChc4EsA.woff2) format('woff2');
      unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
    }

    /* latin */
    @font-face {
      font-family: 'Roboto';
      font-style: normal;
      font-weight: 700;
      src: local('Roboto Bold'), local('Roboto-Bold'), url(https://fonts.gstatic.com/s/roboto/v20/KFOlCnqEu92Fr1MmWUlfBBc4.woff2) format('woff2');
      unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
    }

    /* devanagari */
    @font-face {
      font-family: 'Rozha One';
      font-style: normal;
      font-weight: 400;
      src: local('Rozha One Regular'), local('RozhaOne-Regular'), url(https://fonts.gstatic.com/s/rozhaone/v7/AlZy_zVFtYP12Zncg2kRc335bB0.woff2) format('woff2');
      unicode-range: U+0900-097F, U+1CD0-1CF6, U+1CF8-1CF9, U+200C-200D, U+20A8, U+20B9, U+25CC, U+A830-A839, U+A8E0-A8FB;
    }

    /* latin-ext */
    @font-face {
      font-family: 'Rozha One';
      font-style: normal;
      font-weight: 400;
      src: local('Rozha One Regular'), local('RozhaOne-Regular'), url(https://fonts.gstatic.com/s/rozhaone/v7/AlZy_zVFtYP12Zncg2kRfH35bB0.woff2) format('woff2');
      unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
    }

    /* latin */
    @font-face {
      font-family: 'Rozha One';
      font-style: normal;
      font-weight: 400;
      src: local('Rozha One Regular'), local('RozhaOne-Regular'), url(https://fonts.gstatic.com/s/rozhaone/v7/AlZy_zVFtYP12Zncg2kRcn35.woff2) format('woff2');
      unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
    }

    /* latin-ext */
    @font-face {
      font-family: 'Sacramento';
      font-style: normal;
      font-weight: 400;
      src: local('Sacramento'), local('Sacramento-Regular'), url(https://fonts.gstatic.com/s/sacramento/v7/buEzpo6gcdjy0EiZMBUG4CMf_exL.woff2) format('woff2');
      unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
    }

    /* latin */
    @font-face {
      font-family: 'Sacramento';
      font-style: normal;
      font-weight: 400;
      src: local('Sacramento'), local('Sacramento-Regular'), url(https://fonts.gstatic.com/s/sacramento/v7/buEzpo6gcdjy0EiZMBUG4C0f_Q.woff2) format('woff2');
      unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
    }

    /* latin-ext */
    @font-face {
      font-family: 'Sail';
      font-style: normal;
      font-weight: 400;
      src: local('Sail'), local('Sail-Regular'), url(https://fonts.gstatic.com/s/sail/v10/DPEjYwiBxwYJJB3JAQYA.woff2) format('woff2');
      unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
    }

    /* latin */
    @font-face {
      font-family: 'Sail';
      font-style: normal;
      font-weight: 400;
      src: local('Sail'), local('Sail-Regular'), url(https://fonts.gstatic.com/s/sail/v10/DPEjYwiBxwYJJBPJAQ.woff2) format('woff2');
      unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
    }

    /* latin-ext */
    @font-face {
      font-family: 'Sarina';
      font-style: normal;
      font-weight: 400;
      src: local('Sarina'), local('Sarina-Regular'), url(https://fonts.gstatic.com/s/sarina/v8/-F6wfjF3ITQwasLRJ0rVniA.woff2) format('woff2');
      unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
    }

    /* latin */
    @font-face {
      font-family: 'Sarina';
      font-style: normal;
      font-weight: 400;
      src: local('Sarina'), local('Sarina-Regular'), url(https://fonts.gstatic.com/s/sarina/v8/-F6wfjF3ITQwasLRKUrV.woff2) format('woff2');
      unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
    }

    /* latin-ext */
    @font-face {
      font-family: 'Signika';
      font-style: normal;
      font-weight: 400;
      src: local('Signika Regular'), local('Signika-Regular'), url(https://fonts.gstatic.com/s/signika/v10/vEFR2_JTCgwQ5ejvG18mBkho.woff2) format('woff2');
      unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
    }

    /* latin */
    @font-face {
      font-family: 'Signika';
      font-style: normal;
      font-weight: 400;
      src: local('Signika Regular'), local('Signika-Regular'), url(https://fonts.gstatic.com/s/signika/v10/vEFR2_JTCgwQ5ejvG1EmBg.woff2) format('woff2');
      unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
    }

    /* latin-ext */
    @font-face {
      font-family: 'Signika';
      font-style: normal;
      font-weight: 700;
      src: local('Signika Bold'), local('Signika-Bold'), url(https://fonts.gstatic.com/s/signika/v10/vEFU2_JTCgwQ5ejvE-oDE3lJanAd.woff2) format('woff2');
      unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
    }

    /* latin */
    @font-face {
      font-family: 'Signika';
      font-style: normal;
      font-weight: 700;
      src: local('Signika Bold'), local('Signika-Bold'), url(https://fonts.gstatic.com/s/signika/v10/vEFU2_JTCgwQ5ejvE-oDE3dJag.woff2) format('woff2');
      unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
    }

    /* latin-ext */
    @font-face {
      font-family: 'Spinnaker';
      font-style: normal;
      font-weight: 400;
      src: local('Spinnaker'), local('Spinnaker-Regular'), url(https://fonts.gstatic.com/s/spinnaker/v11/w8gYH2oyX-I0_rvR6HmX1XYKmOo.woff2) format('woff2');
      unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
    }

    /* latin */
    @font-face {
      font-family: 'Spinnaker';
      font-style: normal;
      font-weight: 400;
      src: local('Spinnaker'), local('Spinnaker-Regular'), url(https://fonts.gstatic.com/s/spinnaker/v11/w8gYH2oyX-I0_rvR6HmX23YK.woff2) format('woff2');
      unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
    }

    /* hebrew */
    @font-face {
      font-family: 'Suez One';
      font-style: normal;
      font-weight: 400;
      src: local('Suez One'), local('SuezOne-Regular'), url(https://fonts.gstatic.com/s/suezone/v4/taiJGmd_EZ6rqscQgOFMmouQ-A.woff2) format('woff2');
      unicode-range: U+0590-05FF, U+20AA, U+25CC, U+FB1D-FB4F;
    }

    /* latin-ext */
    @font-face {
      font-family: 'Suez One';
      font-style: normal;
      font-weight: 400;
      src: local('Suez One'), local('SuezOne-Regular'), url(https://fonts.gstatic.com/s/suezone/v4/taiJGmd_EZ6rqscQgOFAmouQ-A.woff2) format('woff2');
      unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
    }

    /* latin */
    @font-face {
      font-family: 'Suez One';
      font-style: normal;
      font-weight: 400;
      src: local('Suez One'), local('SuezOne-Regular'), url(https://fonts.gstatic.com/s/suezone/v4/taiJGmd_EZ6rqscQgOFOmos.woff2) format('woff2');
      unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
    }

    /* latin-ext */
    @font-face {
      font-family: 'Work Sans';
      font-style: normal;
      font-weight: 400;
      src: local('Work Sans'), local('WorkSans-Regular'), url(https://fonts.gstatic.com/s/worksans/v5/QGYsz_wNahGAdqQ43Rh_cqDpp_k.woff2) format('woff2');
      unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
    }

    /* latin */
    @font-face {
      font-family: 'Work Sans';
      font-style: normal;
      font-weight: 400;
      src: local('Work Sans'), local('WorkSans-Regular'), url(https://fonts.gstatic.com/s/worksans/v5/QGYsz_wNahGAdqQ43Rh_fKDp.woff2) format('woff2');
      unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
    }

    /* latin-ext */
    @font-face {
      font-family: 'Work Sans';
      font-style: normal;
      font-weight: 700;
      src: local('Work Sans Bold'), local('WorkSans-Bold'), url(https://fonts.gstatic.com/s/worksans/v5/QGYpz_wNahGAdqQ43Rh3x4X8lthN2fk.woff2) format('woff2');
      unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
    }

    /* latin */
    @font-face {
      font-family: 'Work Sans';
      font-style: normal;
      font-weight: 700;
      src: local('Work Sans Bold'), local('WorkSans-Bold'), url(https://fonts.gstatic.com/s/worksans/v5/QGYpz_wNahGAdqQ43Rh3x4X8mNhN.woff2) format('woff2');
      unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
    }
  </style>
  <script type="text/javascript" charset="utf-8" async="" data-requirecontext="_" data-requiremodule="main-r.min" src="./Overview _ bookstore_files/main-r.min.js.download" crossorigin="anonymous"></script>









  <link rel="prefetch" href="https://vedrang7.wixsite.com/_partials/wix-bolt/1.4336.0/node_modules/viewer-platform-worker/dist/bolt-worker.js">



  <link rel="preconnect" href="https://siteassets.parastorage.com/pages/singlePage/viewerViewModeJson" crossorigin="">




  <link rel="preload" href="./Overview _ bookstore_files/bolt-main-r.init.js.download" as="script" crossorigin="anonymous">
  <link rel="preload" href="./Overview _ bookstore_files/bolt-main-r.animations.js.download" as="script" crossorigin="anonymous">
  <link rel="preload" href="./Overview _ bookstore_files/bolt-main-prod.js.download" as="script" crossorigin="anonymous">
  <script type="text/javascript" charset="utf-8" async="" data-requirecontext="_" data-requiremodule="lodash" src="./Overview _ bookstore_files/lodash.min.js.download" crossorigin="anonymous"></script>
  <script charset="utf-8" src="./Overview _ bookstore_files/bolt-main-r.vendors_init.js.download" crossorigin="anonymous"></script>
  <script charset="utf-8" src="./Overview _ bookstore_files/bolt-main-r.init.js.download" crossorigin="anonymous"></script>
  <script charset="utf-8" src="./Overview _ bookstore_files/bolt-main-r.animations.js.download" crossorigin="anonymous"></script>
  <link rel="preload" href="./Overview _ bookstore_files/santa-components.prod.js.download" as="script" crossorigin="anonymous">
  <link rel="preload" href="./Overview _ bookstore_files/warmupUtils.min.js.download" as="script" crossorigin="anonymous">
  <link rel="preload" href="./Overview _ bookstore_files/skins.min.js.download" as="script" crossorigin="anonymous">
  <link rel="preload" href="./Overview _ bookstore_files/layout.min.js.download" as="script" crossorigin="anonymous">
  <link rel="preload" href="./Overview _ bookstore_files/bolt-components.js.download" as="script" crossorigin="anonymous">










  <title>Overview | bookstore</title>

  <link rel="canonical" href="https://vedrang7.wixsite.com/bookstore">

  <meta property="og:title" content="Overview | bookstore">

  <meta property="og:url" content="https://vedrang7.wixsite.com/bookstore">

  <meta property="og:site_name" content="bookstore">

  <meta property="og:type" content="website">









  <script type="text/javascript" charset="utf-8" async="" data-requirecontext="_" data-requiremodule="warmupUtils" src="./Overview _ bookstore_files/warmupUtils.min.js.download" crossorigin="anonymous"></script>
  <script type="text/javascript" charset="utf-8" async="" data-requirecontext="_" data-requiremodule="zepto" src="./Overview _ bookstore_files/zepto.min.js.download" crossorigin="anonymous"></script>
  <script type="text/javascript" charset="utf-8" async="" data-requirecontext="_" data-requiremodule="wix-ui-santa/dataRefs.bundle" src="./Overview _ bookstore_files/dataRefs.bundle.js.download" crossorigin="anonymous"></script>
  <script type="text/javascript" charset="utf-8" async="" data-requirecontext="_" data-requiremodule="warmupUtilsLib" src="./Overview _ bookstore_files/warmupUtils.js.download" crossorigin="anonymous"></script>
  <script type="text/javascript" charset="utf-8" async="" data-requirecontext="_" data-requiremodule="image-client-api" src="./Overview _ bookstore_files/imageClientApi.js.download" crossorigin="anonymous"></script>
  <script type="text/javascript" charset="utf-8" async="" data-requirecontext="_" data-requiremodule="create-react-class" src="./Overview _ bookstore_files/bundle.min.js.download" crossorigin="anonymous"></script>
  <script type="text/javascript" charset="utf-8" async="" data-requirecontext="_" data-requiremodule="reactDOM" src="./Overview _ bookstore_files/react-dom.production.min.js.download" crossorigin="anonymous"></script>
  <script type="text/javascript" charset="utf-8" async="" data-requirecontext="_" data-requiremodule="react" src="./Overview _ bookstore_files/react.production.min.js.download" crossorigin="anonymous"></script>
  <script type="text/javascript" charset="utf-8" async="" data-requirecontext="_" data-requiremodule="skinUtils" src="./Overview _ bookstore_files/skin-utils.js.download" crossorigin="anonymous"></script>
  <script type="text/javascript" charset="utf-8" async="" data-requirecontext="_" data-requiremodule="thirdPartyAnalytics" src="./Overview _ bookstore_files/thirdPartyAnalytics.min.js.download" crossorigin="anonymous"></script>
  <script type="text/javascript" charset="utf-8" async="" data-requirecontext="_" data-requiremodule="skins" src="./Overview _ bookstore_files/skins.min.js.download" crossorigin="anonymous"></script>
  <script type="text/javascript" charset="utf-8" async="" data-requirecontext="_" data-requiremodule="mobileLayoutUtils" src="./Overview _ bookstore_files/mobileLayoutUtils.js.download" crossorigin="anonymous"></script>
  <script type="text/javascript" charset="utf-8" async="" data-requirecontext="_" data-requiremodule="data-capsule" src="./Overview _ bookstore_files/frame-listener.bundle.min.js.download" crossorigin="anonymous"></script>
  <script type="text/javascript" charset="utf-8" async="" data-requirecontext="_" data-requiremodule="santa-core-utils" src="./Overview _ bookstore_files/coreUtils.js.download" crossorigin="anonymous"></script>
  <script type="text/javascript" charset="utf-8" async="" data-requirecontext="_" data-requiremodule="coreUtils" src="./Overview _ bookstore_files/coreUtils.min.js.download" crossorigin="anonymous"></script>
  <script type="text/javascript" charset="utf-8" async="" data-requirecontext="_" data-requiremodule="wixFreemiumBanner" src="./Overview _ bookstore_files/wixFreemiumBanner.min.js.download" crossorigin="anonymous"></script>
  <script type="text/javascript" charset="utf-8" async="" data-requirecontext="_" data-requiremodule="tpaComponents" src="./Overview _ bookstore_files/tpaComponents.min.js.download" crossorigin="anonymous"></script>
  <script type="text/javascript" charset="utf-8" async="" data-requirecontext="_" data-requiremodule="textCommon" src="./Overview _ bookstore_files/textCommon.min.js.download" crossorigin="anonymous"></script>
  <script type="text/javascript" charset="utf-8" async="" data-requirecontext="_" data-requiremodule="skinExports" src="./Overview _ bookstore_files/skinExports.min.js.download" crossorigin="anonymous"></script>
  <script type="text/javascript" charset="utf-8" async="" data-requirecontext="_" data-requiremodule="santa-components" src="./Overview _ bookstore_files/santa-components.prod.js.download" crossorigin="anonymous"></script>
  <script type="text/javascript" charset="utf-8" async="" data-requirecontext="_" data-requiremodule="pmrpc" src="./Overview _ bookstore_files/pm-rpc.min.js.download" crossorigin="anonymous"></script>
  <script type="text/javascript" charset="utf-8" async="" data-requirecontext="_" data-requiremodule="imageZoom" src="./Overview _ bookstore_files/imageZoom.min.js.download" crossorigin="anonymous"></script>
  <script type="text/javascript" charset="utf-8" async="" data-requirecontext="_" data-requiremodule="galleriesCommon" src="./Overview _ bookstore_files/galleriesCommon.min.js.download" crossorigin="anonymous"></script>
  <script type="text/javascript" charset="utf-8" async="" data-requirecontext="_" data-requiremodule="displayer" src="./Overview _ bookstore_files/displayer.min.js.download" crossorigin="anonymous"></script>
  <script type="text/javascript" charset="utf-8" async="" data-requirecontext="_" data-requiremodule="backgroundCommon" src="./Overview _ bookstore_files/backgroundCommon.min.js.download" crossorigin="anonymous"></script>
  <script type="text/javascript" charset="utf-8" async="" data-requirecontext="_" data-requiremodule="componentsCore" src="./Overview _ bookstore_files/componentsCore.min.js.download" crossorigin="anonymous"></script>
  <script type="text/javascript" charset="utf-8" async="" data-requirecontext="_" data-requiremodule="bolt-components" src="./Overview _ bookstore_files/bolt-components.js.download" crossorigin="anonymous"></script>
  <script type="text/javascript" charset="utf-8" async="" data-requirecontext="_" data-requiremodule="components" src="./Overview _ bookstore_files/components.min.js.download" crossorigin="anonymous"></script>
  <script type="text/javascript" charset="utf-8" async="" data-requirecontext="_" data-requiremodule="wix-dom-sanitizer" src="./Overview _ bookstore_files/wix-dom-sanitizer.js.download" crossorigin="anonymous"></script>
  <script type="text/javascript" charset="utf-8" async="" data-requirecontext="_" data-requiremodule="layout" src="./Overview _ bookstore_files/layout.min.js.download" crossorigin="anonymous"></script>
  <script type="text/javascript" charset="utf-8" async="" data-requirecontext="_" data-requiremodule="bolt-main" src="./Overview _ bookstore_files/bolt-main-prod.js.download" crossorigin="anonymous"></script>
  <script type="text/javascript" charset="utf-8" async="" data-requirecontext="_" data-requiremodule="TweenMax" src="./Overview _ bookstore_files/TweenMax.min.js.download" crossorigin="anonymous"></script>
  <script type="text/javascript" charset="utf-8" async="" data-requirecontext="_" data-requiremodule="santa-animations" src="./Overview _ bookstore_files/santa-animations.js.download" crossorigin="anonymous"></script>
  <script type="text/javascript" charset="utf-8" async="" data-requirecontext="_" data-requiremodule="ScrollToPlugin" src="./Overview _ bookstore_files/ScrollToPlugin.min.js.download" crossorigin="anonymous"></script>
  <script type="text/javascript" charset="utf-8" async="" data-requirecontext="_" data-requiremodule="santa-components-layout" src="./Overview _ bookstore_files/santa-components-layout.prod.js.download" crossorigin="anonymous"></script>
  <script type="text/javascript" charset="utf-8" async="" data-requirecontext="_" data-requiremodule="wix-ui-santa/viewerComponentService.bundle" src="./Overview _ bookstore_files/viewerComponentService.bundle.js.download" crossorigin="anonymous"></script>
  <script type="text/javascript" charset="utf-8" async="" data-requirecontext="_" data-requiremodule="wix-ui-santa/overrides.bundle" src="./Overview _ bookstore_files/overrides.bundle.js.download" crossorigin="anonymous"></script>
  <script type="text/javascript" charset="utf-8" async="" data-requirecontext="_" data-requiremodule="wix-ui-santa/dataRefs.bundle.min" src="./Overview _ bookstore_files/dataRefs.bundle.min.js.download" crossorigin="anonymous"></script>
  <script type="text/javascript" charset="utf-8" async="" data-requirecontext="_" data-requiremodule="xss" src="./Overview _ bookstore_files/xss.min.js.download" crossorigin="anonymous"></script>
  <script type="text/javascript" charset="utf-8" async="" data-requirecontext="_" data-requiremodule="color" src="./Overview _ bookstore_files/color.min.js.download" crossorigin="anonymous"></script>
  <script type="text/javascript" charset="utf-8" async="" data-requirecontext="_" data-requiremodule="svgShape" src="./Overview _ bookstore_files/svgShape.min.js.download" crossorigin="anonymous"></script>
  <script type="text/javascript" charset="utf-8" async="" data-requirecontext="_" data-requiremodule="verticalMenu" src="./Overview _ bookstore_files/verticalMenu.min.js.download" crossorigin="anonymous"></script>
  <script type="text/javascript" charset="utf-8" async="" data-requirecontext="_" data-requiremodule="comboBoxInput" src="./Overview _ bookstore_files/comboBoxInput.min.js.download" crossorigin="anonymous"></script>
  <script type="text/javascript" charset="utf-8" async="" data-requirecontext="_" data-requiremodule="linkBar" src="./Overview _ bookstore_files/linkBar.min.js.download" crossorigin="anonymous"></script>
  <script type="text/javascript" charset="utf-8" async="" data-requirecontext="_" data-requiremodule="promote-analytics-adapter" src="./Overview _ bookstore_files/analytics-event-adapter.bundle.min.js.download" crossorigin="anonymous"></script>
</head>


<body class="" data-js-loaded="true" style="">







  <script type="text/javascript">
    var htmlClassList = document.documentElement.classList;




    var bodyCacheable = true;

    if (!bodyCacheable) {
      wixBiSession.caching = 'none';
      wixBiSession.isCached = false;
    }

    var clientSideRender = false;
  </script>






  <div id="SITE_CONTAINER">
    <style type="text/css" data-styleid="uploadedFonts"></style>
    <div>
      <style type="text/css" data-styleid="theme_fonts">
        .font_0 {
          font: normal normal normal 15px/1.4em brandon-grot-w01-light, sans-serif;
          color: #636363;
        }

        .font_1 {
          font: normal normal normal 16px/1.4em din-next-w01-light, din-next-w02-light, din-next-w10-light, sans-serif;
          color: #636363;
        }

        .font_2 {
          font: normal normal normal 29px/1.4em 'times new roman', times, serif;
          color: #414141;
        }

        .font_3 {
          font: normal normal normal 60px/1.4em brandon-grot-w01-light, sans-serif;
          color: #414141;
        }

        .font_4 {
          font: normal normal normal 40px/1.4em 'times new roman', times, serif;
          color: #414141;
        }

        .font_5 {
          font: normal normal normal 28px/1.4em 'times new roman', times, serif;
          color: #414141;
        }

        .font_6 {
          font: normal normal normal 29px/1.4em 'times new roman', times, serif;
          color: #414141;
        }

        .font_7 {
          font: normal normal normal 16px/1.4em 'times new roman', times, serif;
          color: #414141;
        }

        .font_8 {
          font: normal normal normal 15px/1.4em brandon-grot-w01-light, sans-serif;
          color: #414141;
        }

        .font_9 {
          font: normal normal normal 14px/1.4em brandon-grot-w01-light, sans-serif;
          color: #999999;
        }

        .font_10 {
          font: normal normal normal 12px/1.4em din-next-w01-light, din-next-w02-light, din-next-w10-light, sans-serif;
          color: #636363;
        }
      </style>
      <style type="text/css" data-styleid="theme_colors">
        .color_0 {
          color: #FFFFFF;
        }

        .backcolor_0 {
          background-color: #FFFFFF;
        }

        .color_1 {
          color: #FFFFFF;
        }

        .backcolor_1 {
          background-color: #FFFFFF;
        }

        .color_2 {
          color: #000000;
        }

        .backcolor_2 {
          background-color: #000000;
        }

        .color_3 {
          color: #ED1C24;
        }

        .backcolor_3 {
          background-color: #ED1C24;
        }

        .color_4 {
          color: #0088CB;
        }

        .backcolor_4 {
          background-color: #0088CB;
        }

        .color_5 {
          color: #FFCB05;
        }

        .backcolor_5 {
          background-color: #FFCB05;
        }

        .color_6 {
          color: #727272;
        }

        .backcolor_6 {
          background-color: #727272;
        }

        .color_7 {
          color: #B0B0B0;
        }

        .backcolor_7 {
          background-color: #B0B0B0;
        }

        .color_8 {
          color: #FFFFFF;
        }

        .backcolor_8 {
          background-color: #FFFFFF;
        }

        .color_9 {
          color: #727272;
        }

        .backcolor_9 {
          background-color: #727272;
        }

        .color_10 {
          color: #B0B0B0;
        }

        .backcolor_10 {
          background-color: #B0B0B0;
        }

        .color_11 {
          color: #FFFFFF;
        }

        .backcolor_11 {
          background-color: #FFFFFF;
        }

        .color_12 {
          color: #D6D6D4;
        }

        .backcolor_12 {
          background-color: #D6D6D4;
        }

        .color_13 {
          color: #999999;
        }

        .backcolor_13 {
          background-color: #999999;
        }

        .color_14 {
          color: #636363;
        }

        .backcolor_14 {
          background-color: #636363;
        }

        .color_15 {
          color: #414141;
        }

        .backcolor_15 {
          background-color: #414141;
        }

        .color_16 {
          color: #A0C2E8;
        }

        .backcolor_16 {
          background-color: #A0C2E8;
        }

        .color_17 {
          color: #709DD1;
        }

        .backcolor_17 {
          background-color: #709DD1;
        }

        .color_18 {
          color: #0D5EBA;
        }

        .backcolor_18 {
          background-color: #0D5EBA;
        }

        .color_19 {
          color: #093F7C;
        }

        .backcolor_19 {
          background-color: #093F7C;
        }

        .color_20 {
          color: #041F3E;
        }

        .backcolor_20 {
          background-color: #041F3E;
        }

        .color_21 {
          color: #F6CCB0;
        }

        .backcolor_21 {
          background-color: #F6CCB0;
        }

        .color_22 {
          color: #EEB188;
        }

        .backcolor_22 {
          background-color: #EEB188;
        }

        .color_23 {
          color: #E57022;
        }

        .backcolor_23 {
          background-color: #E57022;
        }

        .color_24 {
          color: #994B17;
        }

        .backcolor_24 {
          background-color: #994B17;
        }

        .color_25 {
          color: #4C250B;
        }

        .backcolor_25 {
          background-color: #4C250B;
        }

        .color_26 {
          color: #F1EEA7;
        }

        .backcolor_26 {
          background-color: #F1EEA7;
        }

        .color_27 {
          color: #E4DE7B;
        }

        .backcolor_27 {
          background-color: #E4DE7B;
        }

        .color_28 {
          color: #D6CC11;
        }

        .backcolor_28 {
          background-color: #D6CC11;
        }

        .color_29 {
          color: #8F880B;
        }

        .backcolor_29 {
          background-color: #8F880B;
        }

        .color_30 {
          color: #474406;
        }

        .backcolor_30 {
          background-color: #474406;
        }

        .color_31 {
          color: #ACE3B7;
        }

        .backcolor_31 {
          background-color: #ACE3B7;
        }

        .color_32 {
          color: #7FC68D;
        }

        .backcolor_32 {
          background-color: #7FC68D;
        }

        .color_33 {
          color: #2FAA47;
        }

        .backcolor_33 {
          background-color: #2FAA47;
        }

        .color_34 {
          color: #1F712F;
        }

        .backcolor_34 {
          background-color: #1F712F;
        }

        .color_35 {
          color: #103918;
        }

        .backcolor_35 {
          background-color: #103918;
        }
      </style>
    </div>
    <div id="CSS_CONTAINER"></div>
    <div data-aid="stylesContainer">
      <style type="text/css" data-styleid="pc1">
        .pc1screenWidthBackground {
          position: absolute;
          top: 0;
          right: 0;
          bottom: 0;
          left: 0;
        }

        .pc1[data-state~="fixedPosition"] {
          position: fixed !important;
          left: auto !important;
          z-index: 50;
        }

        .pc1[data-state~="fixedPosition"].pc1_footer {
          top: auto;
          bottom: 0;
        }

        .pc1bg {
          position: absolute;
          top: 0;
          right: 0;
          bottom: 0;
          left: 0;
        }

        .pc1inlineContent {
          position: absolute;
          top: 0;
          right: 0;
          bottom: 0;
          left: 0;
        }

        .pc1centeredContent {
          position: absolute;
          top: 0;
          right: 0;
          bottom: 0;
          left: 0;
        }
      </style>
      <style type="text/css" data-styleid="siteBackground">
        .siteBackground {
          width: 100%;
          position: absolute;
        }

        .siteBackgroundbgBeforeTransition {
          position: absolute;
          top: 0;
        }

        .siteBackgroundbgAfterTransition {
          position: absolute;
          top: 0;
        }
      </style>
      <style type="text/css" data-styleid="style-k2t63ira">
        .style-k2t63irascreenWidthBackground {
          position: absolute;
          top: 0;
          right: 0;
          bottom: 0;
          left: 0;
        }

        .style-k2t63ira[data-state~="fixedPosition"] {
          position: fixed !important;
          left: auto !important;
          z-index: 50;
        }

        .style-k2t63ira[data-state~="fixedPosition"].style-k2t63ira_footer {
          top: auto;
          bottom: 0;
        }

        .style-k2t63irabg {
          position: absolute;
          top: 0;
          right: 0;
          bottom: 0;
          left: 0;
        }

        .style-k2t63irainlineContent {
          position: absolute;
          top: 0;
          right: 0;
          bottom: 0;
          left: 0;
        }

        .style-k2t63iracenteredContent {
          position: absolute;
          top: 0;
          right: 0;
          bottom: 0;
          left: 0;
        }
      </style>
      <style type="text/css" data-styleid="style-k2t7ishf">
        .style-k2t7ishfscreenWidthBackground {
          position: absolute;
          top: 0;
          right: 0;
          bottom: 0;
          left: 0;
        }

        .style-k2t7ishf[data-state~="fixedPosition"] {
          position: fixed !important;
          left: auto !important;
          z-index: 50;
        }

        .style-k2t7ishf[data-state~="fixedPosition"].style-k2t7ishf_footer {
          top: auto;
          bottom: 0;
        }

        .style-k2t7ishfbg {
          position: absolute;
          top: 0;
          right: 0;
          bottom: 0;
          left: 0;
        }

        .style-k2t7ishfinlineContent {
          position: absolute;
          top: 0;
          right: 0;
          bottom: 0;
          left: 0;
        }

        .style-k2t7ishfcenteredContent {
          position: absolute;
          top: 0;
          right: 0;
          bottom: 0;
          left: 0;
        }
      </style>
      <style type="text/css" data-styleid="lb1">
        .lb1[data-is-responsive~="false"] .lb1itemsContainer {
          position: absolute;
          width: 100%;
          height: 100%;
          white-space: nowrap;
        }

        .lb1[data-is-responsive~="false"][data-state~="mobileView"] .lb1itemsContainer {
          position: absolute;
          width: 100%;
          height: 100%;
          white-space: normal;
        }

        .lb1[data-is-responsive~="true"] {
          display: table;
        }

        .lb1[data-is-responsive~="true"] .lb1itemsContainer {
          display: -webkit-box;
          display: -webkit-flex;
          display: flex;
        }

        .lb1itemsContainer>li:last-child {
          margin: 0 !important;
        }

        .lb1 a {
          display: block;
          height: 100%;
        }

        .lb1imageItemlink {
          cursor: pointer;
        }

        .lb1imageItemimageimage {
          position: static;
          box-shadow: #000 0 0 0;
          user-select: none;
        }
      </style>
      <style type="text/css" data-styleid="style-j8lb5r6x2">
        .style-j8lb5r6x2>ul {
          display: table;
          width: 100%;
          box-sizing: border-box;
        }

        .style-j8lb5r6x2 li {
          display: table;
          width: 100%;
          width: calc(100% - (2 * 0px));
        }

        .style-j8lb5r6x2 a span {
          pointer-events: none;
        }

        .style-j8lb5r6x2_noLink {
          cursor: default !important;
        }

        .style-j8lb5r6x2_counter {
          margin: 0 10px;
          opacity: 0.6;
        }

        .style-j8lb5r6x2menuContainer {
          padding: 0;
          margin: 0;
          position: relative;
        }

        .style-j8lb5r6x2menuContainer .style-j8lb5r6x2_emptySubMenu {
          display: none !important;
        }

        .style-j8lb5r6x2_item {
          padding-left: 0px;
          padding-right: 0px;
          margin: 0;
          position: relative;
          display: block;
          cursor: pointer;
          list-style: none;
        }

        .style-j8lb5r6x2_item:last-child {
          border-bottom: 0;
        }

        .style-j8lb5r6x2_item.style-j8lb5r6x2_hover:not(.style-j8lb5r6x2_noLink)>.style-j8lb5r6x2_label {
          color: #414141;
        }

        .style-j8lb5r6x2_item.style-j8lb5r6x2_hover>.style-j8lb5r6x2_subMenu {
          opacity: 1;
          transition: all 0.4s ease 0s;
          display: block;
        }

        .style-j8lb5r6x2_item.style-j8lb5r6x2_selected>.style-j8lb5r6x2_label,
        .style-j8lb5r6x2_item.style-j8lb5r6x2_selectedContainer>.style-j8lb5r6x2_label {
          color: #414141;
        }

        .style-j8lb5r6x2_label {
          font: normal normal normal 15px/1.4em brandon-grot-w01-light, sans-serif;
          color: #636363;
          display: inline;
          white-space: nowrap;
          overflow: hidden;
        }

        .style-j8lb5r6x2_subMenu {
          z-index: 999;
          min-width: 100%;
          opacity: 0;
          display: none;
          position: absolute;
          transition: all 0.4s ease 0s;
          background-color: rgba(255, 255, 255, 1);
        }

        .style-j8lb5r6x2_subMenu .style-j8lb5r6x2_label {
          font: normal normal normal 14px/1.4em helvetica-w01-light, helvetica-w02-light, sans-serif;
        }

        .style-j8lb5r6x2_subMenu:before {
          content: " ";
          display: block;
          width: 0px;
          height: 100%;
          position: absolute;
          top: 0;
        }

        .style-j8lb5r6x2[data-state~="items-align-left"] .style-j8lb5r6x2_item {
          text-align: left;
        }

        .style-j8lb5r6x2[data-state~="items-align-center"] .style-j8lb5r6x2_item {
          text-align: center;
        }

        .style-j8lb5r6x2[data-state~="items-align-right"] .style-j8lb5r6x2_item {
          text-align: right;
        }

        .style-j8lb5r6x2[data-state~="subItems-align-left"] .style-j8lb5r6x2_subMenu>.style-j8lb5r6x2_item {
          text-align: left;
          padding-left: 0px;
          padding-right: 0px;
        }

        .style-j8lb5r6x2[data-state~="subItems-align-center"] .style-j8lb5r6x2_subMenu>.style-j8lb5r6x2_item {
          text-align: center;
          padding-left: 0px;
          padding-right: 0px;
        }

        .style-j8lb5r6x2[data-state~="subItems-align-right"] .style-j8lb5r6x2_subMenu>.style-j8lb5r6x2_item {
          text-align: right;
          padding-left: 0px;
          padding-right: 0px;
        }

        .style-j8lb5r6x2[data-state~="subMenuOpenSide-right"] .style-j8lb5r6x2_subMenu {
          left: 100%;
          float: left;
          margin-left: 0px;
        }

        .style-j8lb5r6x2[data-state~="subMenuOpenSide-right"] .style-j8lb5r6x2_subMenu:before {
          left: 0;
          margin-left: calc(-1 * 0px);
        }

        .style-j8lb5r6x2[data-state~="subMenuOpenSide-left"] .style-j8lb5r6x2_subMenu {
          right: 100%;
          float: right;
          margin-right: 0px;
        }

        .style-j8lb5r6x2[data-state~="subMenuOpenSide-left"] .style-j8lb5r6x2_subMenu:before {
          right: 0;
          margin-right: calc(-1 * 0px);
        }

        .style-j8lb5r6x2[data-open-direction~="subMenuOpenDir-down"] .style-j8lb5r6x2_subMenu {
          top: 0;
        }

        .style-j8lb5r6x2[data-open-direction~="subMenuOpenDir-up"] .style-j8lb5r6x2_subMenu {
          bottom: 0;
        }

        .style-j8lb5r6x2menuContainer_with-validation-indication select:not([data-preview~="focus"]):invalid {
          border-width: 2px;
          border-style: solid;
          border-color: rgba(249, 249, 249, 1);
          background-color: rgba(255, 255, 255, 1);
        }

        .style-j8lb5r6x2menuContainer {
          display: -webkit-box;
          display: -webkit-flex;
          display: flex;
          -webkit-box-orient: vertical;
          -webkit-box-direction: normal;
          -webkit-flex-direction: column;
          flex-direction: column;
        }

        .style-j8lb5r6x2menuContainer select {
          border-radius: 5px;
          -webkit-appearance: none;
          -moz-appearance: none;
          font: normal normal normal 15px/1.4em brandon-grot-w01-light, sans-serif;
          background-color: rgba(255, 255, 255, 1);
          color: #636363;
          border-width: 2px;
          border-style: solid;
          border-color: rgba(249, 249, 249, 1);
          margin: 0;
          padding: 0 45px;
          cursor: pointer;
          position: relative;
          max-width: 100%;
          min-width: 100%;
          min-height: 10px;
          height: 100%;
          text-overflow: ellipsis;
          white-space: nowrap;
          display: block;
        }

        .style-j8lb5r6x2menuContainer select option {
          text-overflow: ellipsis;
          white-space: nowrap;
          overflow: hidden;
        }

        .style-j8lb5r6x2menuContainer select.style-j8lb5r6x2menuContainer_placeholder-style {
          color: #414141;
        }

        .style-j8lb5r6x2menuContainer select.style-j8lb5r6x2menuContainer_extended-placeholder-style {
          color: #888888;
        }

        .style-j8lb5r6x2menuContainer select:-moz-focusring {
          color: transparent;
          text-shadow: 0 0 0 #000;
        }

        .style-j8lb5r6x2menuContainer select::-ms-expand {
          display: none;
        }

        .style-j8lb5r6x2menuContainer select:focus::-ms-value {
          background: transparent;
        }

        .style-j8lb5r6x2menuContainer select:not(.style-j8lb5r6x2menuContainer_mobileCollection):hover,
        .style-j8lb5r6x2menuContainer select:not(.style-j8lb5r6x2menuContainer_mobileCollection)[data-preview~="hover"] {
          border-width: 2px;
          border-style: solid;
          border-color: rgba(249, 249, 249, 1);
          background-color: rgba(255, 255, 255, 1);
        }

        .style-j8lb5r6x2menuContainer select:not(.style-j8lb5r6x2menuContainer_mobileCollection):focus,
        .style-j8lb5r6x2menuContainer select:not(.style-j8lb5r6x2menuContainer_mobileCollection)[data-preview~="focus"] {
          border-width: 2px;
          border-style: solid;
          border-color: rgba(249, 249, 249, 1);
          background-color: rgba(255, 255, 255, 1);
        }

        .style-j8lb5r6x2menuContainer select:not(.style-j8lb5r6x2menuContainer_mobileCollection)[data-error="true"],
        .style-j8lb5r6x2menuContainer select:not(.style-j8lb5r6x2menuContainer_mobileCollection)[data-preview~="error"] {
          border-width: 2px;
          border-style: solid;
          border-color: rgba(249, 249, 249, 1);
          background-color: rgba(255, 255, 255, 1);
        }

        .style-j8lb5r6x2menuContainer select:not(.style-j8lb5r6x2menuContainer_mobileCollection):disabled,
        .style-j8lb5r6x2menuContainer select:not(.style-j8lb5r6x2menuContainer_mobileCollection)[data-disabled="true"],
        .style-j8lb5r6x2menuContainer select:not(.style-j8lb5r6x2menuContainer_mobileCollection)[data-preview~="disabled"] {
          border-width: 2px;
          border-color: rgba(204, 204, 204, 1);
          color: #FFFFFF;
          background-color: rgba(204, 204, 204, 1);
        }

        .style-j8lb5r6x2menuContainer select:not(.style-j8lb5r6x2menuContainer_mobileCollection):disabled+.style-j8lb5r6x2menuContainerarrow,
        .style-j8lb5r6x2menuContainer select:not(.style-j8lb5r6x2menuContainer_mobileCollection)[data-disabled="true"]+.style-j8lb5r6x2menuContainerarrow,
        .style-j8lb5r6x2menuContainer select:not(.style-j8lb5r6x2menuContainer_mobileCollection)[data-preview~="disabled"]+.style-j8lb5r6x2menuContainerarrow {
          border-width: 2px;
          border-color: rgba(204, 204, 204, 1);
          color: #FFFFFF;
          border: none;
        }

        .style-j8lb5r6x2menuContainerarrow {
          position: absolute;
          pointer-events: none;
          top: 0;
          bottom: 0;
          box-sizing: border-box;
          padding-left: 20px;
          padding-right: 20px;
          height: inherit;
          display: -webkit-box;
          display: -webkit-flex;
          display: flex;
          -webkit-box-align: center;
          -webkit-align-items: center;
          align-items: center;
        }

        .style-j8lb5r6x2menuContainerarrow .style-j8lb5r6x2menuContainer_svg_container {
          width: 12px;
        }

        .style-j8lb5r6x2menuContainerarrow .style-j8lb5r6x2menuContainer_svg_container svg {
          height: 100%;
          fill: rgba(214, 214, 212, 1);
        }

        .style-j8lb5r6x2menuContainer_left-direction {
          text-align-last: left;
        }

        .style-j8lb5r6x2menuContainer_left-direction .style-j8lb5r6x2menuContainerarrow,
        .style-j8lb5r6x2menuContainer_left-direction select:hover+.style-j8lb5r6x2menuContainerarrow,
        .style-j8lb5r6x2menuContainer_left-direction select[data-preview~="hover"]+.style-j8lb5r6x2menuContainerarrow,
        .style-j8lb5r6x2menuContainer_left-direction select:focus+.style-j8lb5r6x2menuContainerarrow,
        .style-j8lb5r6x2menuContainer_left-direction select[data-preview~="focus"]+.style-j8lb5r6x2menuContainerarrow,
        .style-j8lb5r6x2menuContainer_left-direction[data-preview~="focus"] .style-j8lb5r6x2menuContainerarrow,
        .style-j8lb5r6x2menuContainer_left-direction select[data-error="true"]+.style-j8lb5r6x2menuContainerarrow,
        .style-j8lb5r6x2menuContainer_left-direction select[data-preview~="error"]+.style-j8lb5r6x2menuContainerarrow {
          border-left: 0;
        }

        .style-j8lb5r6x2menuContainer_left-direction .style-j8lb5r6x2menuContainerarrow {
          right: 0;
        }

        .style-j8lb5r6x2menuContainer_right-direction {
          text-align-last: right;
          direction: rtl;
        }

        .style-j8lb5r6x2menuContainer_right-direction .style-j8lb5r6x2menuContainerarrow,
        .style-j8lb5r6x2menuContainer_right-direction select:hover+.style-j8lb5r6x2menuContainerarrow,
        .style-j8lb5r6x2menuContainer_right-direction select[data-preview~="hover"]+.style-j8lb5r6x2menuContainerarrow,
        .style-j8lb5r6x2menuContainer_right-direction select:focus+.style-j8lb5r6x2menuContainerarrow,
        .style-j8lb5r6x2menuContainer_right-direction select[data-preview~="focus"]+.style-j8lb5r6x2menuContainerarrow,
        .style-j8lb5r6x2menuContainer_right-direction[data-preview~="focus"] .style-j8lb5r6x2menuContainerarrow,
        .style-j8lb5r6x2menuContainer_right-direction select[data-error="true"]+.style-j8lb5r6x2menuContainerarrow,
        .style-j8lb5r6x2menuContainer_right-direction select[data-preview~="error"]+.style-j8lb5r6x2menuContainerarrow {
          border-right: 0;
        }

        .style-j8lb5r6x2menuContainer_right-direction .style-j8lb5r6x2menuContainerarrow {
          left: 0;
        }

        .style-j8lb5r6x2menuContainer_center-direction {
          text-align-last: left;
          text-align-last: center;
        }

        .style-j8lb5r6x2menuContainer_center-direction .style-j8lb5r6x2menuContainerarrow,
        .style-j8lb5r6x2menuContainer_center-direction select:hover+.style-j8lb5r6x2menuContainerarrow,
        .style-j8lb5r6x2menuContainer_center-direction select[data-preview~="hover"]+.style-j8lb5r6x2menuContainerarrow,
        .style-j8lb5r6x2menuContainer_center-direction select:focus+.style-j8lb5r6x2menuContainerarrow,
        .style-j8lb5r6x2menuContainer_center-direction select[data-preview~="focus"]+.style-j8lb5r6x2menuContainerarrow,
        .style-j8lb5r6x2menuContainer_center-direction[data-preview~="focus"] .style-j8lb5r6x2menuContainerarrow,
        .style-j8lb5r6x2menuContainer_center-direction select[data-error="true"]+.style-j8lb5r6x2menuContainerarrow,
        .style-j8lb5r6x2menuContainer_center-direction select[data-preview~="error"]+.style-j8lb5r6x2menuContainerarrow {
          border-left: 0;
        }

        .style-j8lb5r6x2menuContainer_center-direction .style-j8lb5r6x2menuContainerarrow {
          right: 0;
        }

        .style-j8lb5r6x2menuContainer_mobileMenuContainer {
          border: 0;
        }

        .style-j8lb5r6x2menuContainer_mobileMenuContainer .style-j8lb5r6x2menuContainerarrow .style-j8lb5r6x2menuContainer_svg_container .style-j8lb5r6x2menuContainericon {
          fill: #636363;
        }

        .style-j8lb5r6x2menuContainerlabel {
          font: normal normal normal 15px/1.4em brandon-grot-w01-light, sans-serif;
          color: #414141;
          word-break: break-word;
          display: inline-block;
          line-height: 1;
        }

        .style-j8lb5r6x2menuContainer_required .style-j8lb5r6x2menuContainerlabel::after {
          content: " *";
          color: transparent;
        }

        .style-j8lb5r6x2menuContainer_selector-wrapper {
          -webkit-box-flex: 1;
          -webkit-flex: 1;
          flex: 1;
          position: relative;
        }
      </style>
      <style type="text/css" data-styleid="style-jepv3jl2">
        .style-jepv3jl2 {
          box-sizing: border-box;
          border-top: 1px solid rgba(214, 214, 212, 1);
          height: 0;
        }
      </style>
      <style type="text/css" data-styleid="style-k2rzgxrr">
        .style-k2rzgxrr {
          -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
        }

        .style-k2rzgxrrlink,
        .style-k2rzgxrrsvg {
          position: absolute;
          top: 0;
          right: 0;
          bottom: 0;
          left: 0;
        }

        .style-k2rzgxrr svg {
          position: absolute;
          top: 0;
          right: 0;
          bottom: 0;
          left: 0;
          width: 100%;
          height: 100%;
          margin: auto;
        }

        .style-k2rzgxrr_non-scaling-stroke * {
          vector-effect: non-scaling-stroke;
        }

        .style-k2rzgxrr_with-shadow svg {
          overflow: visible !important;
        }
      </style>
      <style type="text/css" data-styleid="txtNew">
        .txtNew {
          word-wrap: break-word;
          text-align: start;
        }

        .txtNew_override-left * {
          text-align: left !important;
        }

        .txtNew_override-right * {
          text-align: right !important;
        }

        .txtNew_override-center * {
          text-align: center !important;
        }

        .txtNew_override-justify * {
          text-align: justify !important;
        }

        .txtNew>* {
          pointer-events: auto;
        }

        .txtNew li {
          font-style: inherit;
          font-weight: inherit;
          line-height: inherit;
          letter-spacing: normal;
        }

        .txtNew ol,
        .txtNew ul {
          padding-left: 1.3em;
          padding-right: 0;
          margin-left: 0.5em;
          margin-right: 0;
          line-height: normal;
          letter-spacing: normal;
        }

        .txtNew ul {
          list-style-type: disc;
        }

        .txtNew ol {
          list-style-type: decimal;
        }

        .txtNew ul ul,
        .txtNew ol ul {
          list-style-type: circle;
        }

        .txtNew ul ul ul,
        .txtNew ol ul ul {
          list-style-type: square;
        }

        .txtNew ul ol ul,
        .txtNew ol ol ul {
          list-style-type: square;
        }

        .txtNew ul[dir="rtl"],
        .txtNew ol[dir="rtl"] {
          padding-left: 0;
          padding-right: 1.3em;
          margin-left: 0;
          margin-right: 0.5em;
        }

        .txtNew ul[dir="rtl"] ul,
        .txtNew ul[dir="rtl"] ol,
        .txtNew ol[dir="rtl"] ul,
        .txtNew ol[dir="rtl"] ol {
          padding-left: 0;
          padding-right: 1.3em;
          margin-left: 0;
          margin-right: 0.5em;
        }

        .txtNew p {
          margin: 0;
          line-height: normal;
          letter-spacing: normal;
        }

        .txtNew h1 {
          margin: 0;
          line-height: normal;
          letter-spacing: normal;
        }

        .txtNew h2 {
          margin: 0;
          line-height: normal;
          letter-spacing: normal;
        }

        .txtNew h3 {
          margin: 0;
          line-height: normal;
          letter-spacing: normal;
        }

        .txtNew h4 {
          margin: 0;
          line-height: normal;
          letter-spacing: normal;
        }

        .txtNew h5 {
          margin: 0;
          line-height: normal;
          letter-spacing: normal;
        }

        .txtNew h6 {
          margin: 0;
          line-height: normal;
          letter-spacing: normal;
        }

        .txtNew a {
          color: inherit;
        }
      </style>
      <style type="text/css" data-styleid="s_BIwzIGroupSkin">
        .s_BIwzIGroupSkin {
          pointer-events: none;
        }

        .s_BIwzIGroupSkin_ie10 {
          max-width: 0;
          max-height: 0;
        }

        .s_BIwzIGroupSkininlineContent {
          pointer-events: all;
        }
      </style>
      <style type="text/css" data-styleid="ca1">
        .ca1_zoomedin {
          cursor: url(https://static.parastorage.com/services/skins/2.1229.80/images/wysiwyg/core/themes/base/cursor_zoom_out.png), url(https://static.parastorage.com/services/skins/2.1229.80/images/wysiwyg/core/themes/base/cursor_zoom_out.cur), auto;
          overflow: hidden;
          display: block;
        }

        .ca1_zoomedout {
          cursor: url(https://static.parastorage.com/services/skins/2.1229.80/images/wysiwyg/core/themes/base/cursor_zoom_in.png), url(https://static.parastorage.com/services/skins/2.1229.80/images/wysiwyg/core/themes/base/cursor_zoom_in.cur), auto;
        }

        .ca1link {
          display: block;
          overflow: hidden;
        }

        .ca1img {
          overflow: hidden;
        }

        .ca1[data-is-responsive=true] .ca1link,
        .ca1[data-is-responsive=true] .ca1img,
        .ca1[data-is-responsive=true] wix-image {
          position: absolute;
          top: 0;
          right: 0;
          bottom: 0;
          left: 0;
        }

        .ca1imgimage {
          position: static;
          box-shadow: #000 0 0 0;
          user-select: none;
        }
      </style>
      <style type="text/css" data-styleid="style-k2t643pb">
        .style-k2t643pbbg {
          overflow: hidden;
          position: absolute;
          top: 0;
          right: 0;
          bottom: 0;
          left: 0;
          background-color: rgba(255, 255, 255, 1);
        }

        .style-k2t643pb[data-state~="mobileView"] .style-k2t643pbbg {
          left: 10px;
          right: 10px;
        }

        .style-k2t643pbinlineContent {
          position: absolute;
          top: 0;
          right: 0;
          bottom: 0;
          left: 0;
          bottom: 20px;
        }
      </style>
    </div>
    <div class="noop" style="position:relative">
      <div id="SCROLL_TO_TOP" tabindex="-1" aria-label="top of page" role="region" style="height:0"></div>
      <div id="FONTS_CONTAINER"></div>
      <div id="SITE_BACKGROUND" style="top: 50px; min-height: calc(100vh - 50px); height: 1000px; width: 1903px;" class="siteBackground">
        <div id="SITE_BACKGROUND_previous_noPrev" data-position="absolute" data-align="" data-fitting="" class="siteBackgroundprevious" style="width: 100%; height: 100%;">
          <div id="SITE_BACKGROUNDpreviousImage" class="siteBackgroundpreviousImage"></div>
          <div id="SITE_BACKGROUNDpreviousVideo" class="siteBackgroundpreviousVideo"></div>
          <div id="SITE_BACKGROUND_previousOverlay_noPrev" class="siteBackgroundpreviousOverlay"></div>
        </div>
        <div id="SITE_BACKGROUND_current_dhhnr_k2s010kk_bg" style="top: 0px; background-color: rgb(255, 255, 255); position: absolute; width: 100%; height: 100%;" data-position="absolute" data-align="center" data-fitting="fill" class="siteBackgroundcurrent">
          <div id="SITE_BACKGROUND_currentImage_dhhnr_k2s010kk_bg" style="position: absolute; top: 0px; height: 100%; width: 100%;" data-type="bgimage" data-height="100%" class="siteBackgroundcurrentImage" data-image-css="{&quot;backgroundSize&quot;:&quot;&quot;,&quot;backgroundPosition&quot;:&quot;&quot;,&quot;backgroundRepeat&quot;:&quot;&quot;}"></div>
          <div id="SITE_BACKGROUNDcurrentVideo" class="siteBackgroundcurrentVideo"></div>
          <div id="SITE_BACKGROUND_currentOverlay_dhhnr_k2s010kk_bg" style="position:absolute;top:0;width:100%;height:100%" class="siteBackgroundcurrentOverlay"></div>
        </div>
      </div>
      <div id="SITE_ROOT" class="SITE_ROOT" style="width:100%;min-width:980px;padding-bottom:0;top:50px" aria-hidden="false">
        <div id="masterPage" class="mesh-layout" data-mesh-layout="grid">
          <header data-is-mobile="false" data-state="fixedPosition transition-allowed" data-site-width="980" data-header-top="0" style="position:fixed;margin-top:50px;top:0;left:0;margin-left:0;width:100%;min-width:980px;bottom:;right:;z-index:50" class="style-k2t7ishf" id="SITE_HEADER">
            <div style="left:0;width:100%" id="SITE_HEADERscreenWidthBackground" class="style-k2t7ishfscreenWidthBackground"></div>
            <div id="SITE_HEADERcenteredContent" class="style-k2t7ishfcenteredContent">
              <div style="margin-left:calc((100% - 980px) / 2);width:980px" id="SITE_HEADERbg" class="style-k2t7ishfbg"></div>
              <div id="SITE_HEADERinlineContent" class="style-k2t7ishfinlineContent">
                <style id="SITE_HEADER-mesh-styles">
                  #SITE_HEADERinlineContent {
                    height: auto;
                    width: 100%;
                    position: relative;
                  }

                  #SITE_HEADERinlineContent-gridWrapper {
                    pointer-events: none;
                  }

                  #SITE_HEADERinlineContent-gridContainer {
                    position: static;
                    display: grid;
                    height: auto;
                    width: 100%;
                    min-height: auto;
                    grid-template-rows: 1fr;
                    grid-template-columns: 100%;
                  }

                  #comp-k2t7em1t {
                    position: relative;
                    margin: 5px 0px 6px calc((100% - 980px) * 0.5);
                    left: -200px;
                    grid-area: 1 / 1 / 2 / 2;
                    justify-self: start;
                    align-self: start;
                  }

                  #SITE_HEADERcenteredContent {
                    position: relative;
                  }

                  #SITE_HEADERinlineContent-gridContainer>* {
                    pointer-events: auto;
                  }

                  #SITE_HEADERinlineContent-gridContainer>[id$="-rotated-wrapper"] {
                    pointer-events: none;
                  }

                  #SITE_HEADERinlineContent-gridContainer>[id$="-rotated-wrapper"]>* {
                    pointer-events: auto;
                  }
                </style>
                <div id="SITE_HEADERinlineContent-gridWrapper" data-mesh-internal="true">
                  <div id="SITE_HEADERinlineContent-gridContainer" data-mesh-internal="true">
                    <div style="width: 130px; height: 118px;" title="" data-is-responsive="false" data-display-mode="fill" data-content-padding-horizontal="0" data-content-padding-vertical="0" data-exact-height="118" class="ca1" id="comp-k2t7em1t">
                      <div style="width: 130px; height: 118px;" id="comp-k2t7em1tlink" class="ca1link">
                        <wix-image style="width:130px;height:118px;top:0;left:0" data-has-bg-scroll-effect="" data-image-info="{&quot;imageData&quot;:{&quot;type&quot;:&quot;Image&quot;,&quot;id&quot;:&quot;dataItem-k2t7em3c&quot;,&quot;metaData&quot;:{&quot;pageId&quot;:&quot;masterPage&quot;,&quot;isPreset&quot;:false,&quot;schemaVersion&quot;:&quot;2.0&quot;,&quot;isHidden&quot;:false},&quot;title&quot;:&quot;&quot;,&quot;uri&quot;:&quot;70eda8_2ab2c2e6e5d043f5b0cf8514815f10d6~mv2_d_2000_2000_s_2.png&quot;,&quot;description&quot;:&quot;&quot;,&quot;width&quot;:2000,&quot;height&quot;:2000,&quot;alt&quot;:&quot;smartbook-01.png_fbclid=IwAR25id50fqxl5K&quot;,&quot;crop&quot;:{&quot;x&quot;:307,&quot;y&quot;:153,&quot;width&quot;:1373,&quot;height&quot;:1273,&quot;svgId&quot;:&quot;909695c1e003409ba70b5561666c7c4d.svg&quot;},&quot;name&quot;:&quot;smartbook-01.png_fbclid=IwAR25id50fqxl5K&quot;,&quot;displayMode&quot;:&quot;fill&quot;},&quot;containerId&quot;:&quot;comp-k2t7em1t&quot;,&quot;displayMode&quot;:&quot;fill&quot;}" data-is-svg="true" id="comp-k2t7em1timg" class="ca1img" data-src="https://static.wixstatic.com/media/70eda8_2ab2c2e6e5d043f5b0cf8514815f10d6~mv2_d_2000_2000_s_2.png/v1/crop/x_307,y_153,w_1373,h_1273/fill/w_130,h_118,al_c,q_80,usm_0.66_1.00_0.01/smartbook-01_png_fbclid%3DIwAR25id50fqxl5K.webp"><svg id="svgcomp-k2t7em1timg" version="1.1" role="img" aria-label="smartbook-01.png_fbclid=IwAR25id50fqxl5K" width="130" height="118" viewBox="0 0 130 118">
                            <defs>
                              <style>
                                #mask-comp-k2t7em1timg-svg * {
                                  fill: #fff;
                                  stroke: #fff;
                                  stroke-width: 0;
                                }
                              </style>
                              <mask id="mask-comp-k2t7em1timg">
                                <use id="mask-comp-k2t7em1timg-svg-use" xlink:href="#mask-comp-k2t7em1timg-svg" width="100%" height="100%" x="0" y="0"></use>
                              </mask>
                              <svg id="mask-comp-k2t7em1timg-svg" preserveAspectRatio="none" data-bbox="20 20 160 160" viewBox="20 20 160 160" height="200" width="200" xmlns="http://www.w3.org/2000/svg" data-type="shape" role="img">
                                <g>
                                  <path d="M180 20v160H20V20h160z"></path>
                                </g>
                              </svg>

                            </defs>
                            <image width="130" height="118" x="0" y="0" transform="" preserveAspectRatio="xMidYMid slice" id="comp-k2t7em1timgimage" data-type="image" xlink:href="https://static.wixstatic.com/media/70eda8_2ab2c2e6e5d043f5b0cf8514815f10d6~mv2_d_2000_2000_s_2.png/v1/crop/x_307,y_153,w_1373,h_1273/fill/w_130,h_118,al_c,q_80,usm_0.66_1.00_0.01/smartbook-01_png_fbclid%3DIwAR25id50fqxl5K.webp" mask="url(#mask-comp-k2t7em1timg)" data-svg-mask="mask-comp-k2t7em1timg-svg" data-src=""></image>
                          </svg></wix-image>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </header>
          <div id="SITE_HEADER-placeholder" style="height:129px;display:block"></div>
          <main tabindex="-1" data-is-mobile="false" data-is-mesh="true" data-site-width="980" style="left:0;margin-left:0;width:100%;min-width:980px;top:0;bottom:;right:;position:" class="pc1" data-state="" id="PAGES_CONTAINER">
            <div style="left:0" id="PAGES_CONTAINERscreenWidthBackground" class="pc1screenWidthBackground"></div>
            <div style="position:relative" id="PAGES_CONTAINERcenteredContent" class="pc1centeredContent">
              <div style="display:none" id="PAGES_CONTAINERbg" class="pc1bg"></div>
              <div style="position:relative" id="PAGES_CONTAINERinlineContent" class="pc1inlineContent">
                <div style="width:100%">
                  <div data-ismobile="false" data-is-mesh-layout="true" style="height:100%;left:0;position:relative;top:;bottom:;right:" class="style-k2t643pb" id="dhhnr">
                    <div style="margin-left:calc((100% - 980px) / 2);width:980px" id="dhhnrbg" class="style-k2t643pbbg"></div>
                    <div class="style-k2t643pbinlineContent" id="dhhnrinlineContent">
                      <style id="dhhnr-mesh-styles">
                        #dhhnrinlineContent {
                          height: auto;
                          width: 100%;
                          position: relative;
                        }

                        #dhhnrinlineContent-gridWrapper {
                          display: flex;
                          pointer-events: none;
                        }

                        #dhhnrinlineContent-gridContainer {
                          position: static;
                          display: grid;
                          height: auto;
                          width: 100%;
                          min-height: 764px;
                          margin-top: -1px;
                          grid-template-rows: min-content min-content min-content min-content min-content min-content 1fr;
                          grid-template-columns: 100%;
                          padding-bottom: 20px;
                          box-sizing: border-box;
                        }

                        #comp-k2s0kuiw {
                          position: relative;
                          margin: 0px 0px 10px calc((100% - 980px) * 0.5);
                          left: 47px;
                          grid-area: 2 / 1 / 3 / 2;
                          justify-self: start;
                          align-self: start;
                        }

                        #comp-k2s0plox {
                          position: relative;
                          margin: 0px 0px -25px calc((100% - 980px) * 0.5);
                          left: 47px;
                          grid-area: 4 / 1 / 5 / 2;
                          justify-self: start;
                          align-self: start;
                        }

                        #comp-k2t2aykn {
                          position: relative;
                          margin: 35px 0px 0 calc((100% - 980px) * 0.5);
                          left: 47px;
                          grid-area: 7 / 1 / 8 / 2;
                          justify-self: start;
                          align-self: start;
                        }

                        #comp-k2s14bet {
                          position: relative;
                          margin: 0px 0px -36px calc((100% - 980px) * 0.5);
                          left: 415px;
                          grid-area: 1 / 1 / 7 / 2;
                          justify-self: start;
                          align-self: start;
                        }

                        #comp-k2s1ihjs {
                          position: relative;
                          margin: 0px 0px 43px calc((100% - 980px) * 0.5);
                          left: 418px;
                          grid-area: 7 / 1 / 8 / 2;
                          justify-self: start;
                          align-self: start;
                        }

                        #comp-k2s1jpo1 {
                          position: relative;
                          margin: 82px 0px -4px calc((100% - 980px) * 0.5);
                          left: 527px;
                          grid-area: 1 / 1 / 2 / 2;
                          justify-self: start;
                          align-self: start;
                        }

                        #comp-k2s1kjng {
                          position: relative;
                          margin: 0px 0px 24px calc((100% - 980px) * 0.5);
                          left: 526px;
                          grid-area: 5 / 1 / 6 / 2;
                          justify-self: start;
                          align-self: start;
                        }

                        #dhhnrinlineContent-wedge-4 {
                          visibility: hidden;
                          height: 329px;
                          width: 0;
                          grid-area: 1 / 1 / 4 / 2;
                        }

                        #dhhnrcenteredContent {
                          position: relative;
                        }

                        #dhhnrinlineContent-gridContainer>* {
                          pointer-events: auto;
                        }

                        #dhhnrinlineContent-gridContainer>[id$="-rotated-wrapper"] {
                          pointer-events: none;
                        }

                        #dhhnrinlineContent-gridContainer>[id$="-rotated-wrapper"]>* {
                          pointer-events: auto;
                        }
                      </style>
                      <div id="dhhnrinlineContent-gridWrapper" data-mesh-internal="true">
                        <div id="dhhnrinlineContent-gridContainer" data-mesh-internal="true">
                          <div style="pointer-events:none;top:;bottom:;left:;right:;position:" class="s_BIwzIGroupSkin" id="comp-k2s0kuiw">
                            <div class="s_BIwzIGroupSkininlineContent" style="pointer-events:none" id="comp-k2s0kuiwinlineContent">
                              <style id="comp-k2s0kuiw-mesh-styles">
                                #comp-k2s0kuiwinlineContent {
                                  height: auto;
                                  width: 312px;
                                  position: relative;
                                }

                                #comp-k2s0kuiwinlineContent-gridWrapper {
                                  pointer-events: none;
                                }

                                #comp-k2s0kuiwinlineContent-gridContainer {
                                  position: static;
                                  display: grid;
                                  height: auto;
                                  width: 100%;
                                  min-height: auto;
                                  grid-template-rows: min-content min-content min-content 1fr;
                                  grid-template-columns: 100%;
                                }

                                #comp-k2rzgxk4 {
                                  position: relative;
                                  margin: 0px 0px 0px 0;
                                  left: 0px;
                                  grid-area: 1 / 1 / 5 / 2;
                                  justify-self: start;
                                  align-self: start;
                                }

                                #comp-k2rzhq95 {
                                  position: relative;
                                  margin: 4px 0px 7px 0;
                                  left: 87px;
                                  grid-area: 1 / 1 / 2 / 2;
                                  justify-self: start;
                                  align-self: start;
                                }

                                #comp-k2rzjs8l {
                                  position: relative;
                                  margin: 11px 0px 19px 0;
                                  left: 11px;
                                  grid-area: 2 / 1 / 3 / 2;
                                  justify-self: start;
                                  align-self: start;
                                }

                                #comp-k2rzkkt4 {
                                  position: relative;
                                  margin: 9px 0px 12px 0;
                                  left: 11px;
                                  grid-area: 3 / 1 / 4 / 2;
                                  justify-self: start;
                                  align-self: start;
                                }

                                #comp-k2rzlq48 {
                                  position: relative;
                                  margin: 0px 0px 18px 0;
                                  left: 174px;
                                  grid-area: 2 / 1 / 3 / 2;
                                  justify-self: start;
                                  align-self: start;
                                }

                                #comp-k2rzm9rd {
                                  position: relative;
                                  margin: 0px 0px 9px 0;
                                  left: 153px;
                                  grid-area: 3 / 1 / 4 / 2;
                                  justify-self: start;
                                  align-self: start;
                                }

                                #comp-k2s0kuiwcenteredContent {
                                  position: relative;
                                }

                                #comp-k2s0kuiwinlineContent-gridContainer>* {
                                  pointer-events: auto;
                                }

                                #comp-k2s0kuiwinlineContent-gridContainer>[id$="-rotated-wrapper"] {
                                  pointer-events: none;
                                }

                                #comp-k2s0kuiwinlineContent-gridContainer>[id$="-rotated-wrapper"]>* {
                                  pointer-events: auto;
                                }
                              </style>
                              <div id="comp-k2s0kuiwinlineContent-gridWrapper" data-mesh-internal="true">
                                <div id="comp-k2s0kuiwinlineContent-gridContainer" data-mesh-internal="true">
                                  <div data-svg-id="1181dba727444047b53b4924eb63e3f0.svg" data-svg-type="shape" data-display-mode="stretch" data-strokewidth="0" data-viewbox="0 0 200 200" data-preserve-viewbox="ignore" style="top:;bottom:;left:;right:;width:312px;height:140px;position:" class="style-k2rzgxrr" id="comp-k2rzgxk4">
                                    <div id="comp-k2rzgxk4link" class="style-k2rzgxrrlink">
                                      <div style="stroke-width:0;fill-opacity:1;stroke:rgba(65, 65, 65, 1);stroke-opacity:1;fill:rgba(255, 255, 255, 1)" class="style-k2rzgxrr_comp-k2rzgxk4 style-k2rzgxrr_non-scaling-stroke style-k2rzgxrr_with-shadow style-k2rzgxrrsvg" id="comp-k2rzgxk4svg">
                                        <svg height="100%" width="100%">
                                          <defs>
                                            <filter x="-9" y="-9" width="334" height="162" filterUnits="userSpaceOnUse" id="comp-k2rzgxk4-shadow" color-interpolation-filters="sRGB">
                                              <fecomponenttransfer result="srcRGB"></fecomponenttransfer>
                                              <fegaussianblur stdDeviation="3" in="SourceAlpha"></fegaussianblur>
                                              <feoffset dx="4" dy="4"></feoffset>
                                              <fecolormatrix type="matrix" values="0 0 0 0 0
     0 0 0 0 0
     0 0 0 0 0
     0 0 0 0.3 0"></fecolormatrix>
                                              <femerge>
                                                <femergenode></femergenode>
                                                <femergenode in="SourceGraphic"></femergenode>
                                              </femerge>
                                              <fecomponenttransfer></fecomponenttransfer>
                                            </filter>
                                          </defs>
                                          <g filter="url(#comp-k2rzgxk4-shadow)">
                                            <svg preserveAspectRatio="none" data-bbox="20 69 160 62" viewBox="20 69 160 62" height="100%" width="100%" xmlns="http://www.w3.org/2000/svg" data-type="shape" role="img">
                                              <g>
                                                <path d="M166.554 131H33.446C26.094 131 20 124.984 20 117.513V82.487C20 75.113 25.998 69 33.446 69h133.108C173.906 69 180 75.016 180 82.487v35.027c0 7.47-6.094 13.486-13.446 13.486z"></path>
                                              </g>
                                            </svg>

                                          </g>
                                        </svg>
                                      </div>
                                    </div>
                                  </div>
                                  <div data-packed="true" style="width: 146px; pointer-events: none;" class="txtNew" id="comp-k2rzhq95">
                                    <h2 class="font_2" style="text-align:center;"><span style="color:#000000;"><span style="font-weight:bold;"><span style="font-family:avenir-lt-w01_35-light1475496,sans-serif;">Inventory</span></span></span></h2>
                                  </div>
                                  <div data-packed="true" style="width: 112px; pointer-events: none;" class="txtNew" id="comp-k2rzjs8l">
                                    <h1 class="font_0"><span class="color_13">Number of items:</span></h1>
                                  </div>
                                  <div data-packed="true" style="width: 112px; pointer-events: none;" class="txtNew" id="comp-k2rzkkt4">
                                    <h1 class="font_0"><span class="color_13">Value of items:</span></h1>
                                  </div>
                                  <div data-packed="true" style="width: 51px; pointer-events: none;" class="txtNew" id="comp-k2rzlq48">
                                    <h2 class="font_2" id="numberItems"><span class="color_14">5.1k</span></h2>
                                  </div>
                                  <div data-packed="true" style="width: 92px; pointer-events: none;" class="txtNew" id="comp-k2rzm9rd">
                                    <h2 class="font_2"><span class="color_14">9.674 €</span></h2>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div style="pointer-events:none;top:;bottom:;left:;right:;position:" class="s_BIwzIGroupSkin" id="comp-k2s0plox">
                            <div class="s_BIwzIGroupSkininlineContent" style="pointer-events:none" id="comp-k2s0ploxinlineContent">
                              <style id="comp-k2s0plox-mesh-styles">
                                #comp-k2s0ploxinlineContent {
                                  height: auto;
                                  width: 312px;
                                  position: relative;
                                }

                                #comp-k2s0ploxinlineContent-gridWrapper {
                                  pointer-events: none;
                                }

                                #comp-k2s0ploxinlineContent-gridContainer {
                                  position: static;
                                  display: grid;
                                  height: auto;
                                  width: 100%;
                                  min-height: auto;
                                  grid-template-rows: min-content min-content 1fr;
                                  grid-template-columns: 100%;
                                }

                                #comp-k2s0l4ds {
                                  position: relative;
                                  margin: 0px 0px 0px 0;
                                  left: 0px;
                                  grid-area: 1 / 1 / 4 / 2;
                                  justify-self: start;
                                  align-self: start;
                                }

                                #comp-k2s0l4eo {
                                  position: relative;
                                  margin: 10px 0px 8px 0;
                                  left: 44px;
                                  grid-area: 1 / 1 / 2 / 2;
                                  justify-self: start;
                                  align-self: start;
                                }

                                #comp-k2s0l4ie {
                                  position: relative;
                                  margin: 0px 0px 14px 0;
                                  left: 102px;
                                  grid-area: 2 / 1 / 3 / 2;
                                  justify-self: start;
                                  align-self: start;
                                }

                                #comp-k2s0ploxcenteredContent {
                                  position: relative;
                                }

                                #comp-k2s0ploxinlineContent-gridContainer>* {
                                  pointer-events: auto;
                                }

                                #comp-k2s0ploxinlineContent-gridContainer>[id$="-rotated-wrapper"] {
                                  pointer-events: none;
                                }

                                #comp-k2s0ploxinlineContent-gridContainer>[id$="-rotated-wrapper"]>* {
                                  pointer-events: auto;
                                }
                              </style>
                              <div id="comp-k2s0ploxinlineContent-gridWrapper" data-mesh-internal="true">
                                <div id="comp-k2s0ploxinlineContent-gridContainer" data-mesh-internal="true">
                                  <div data-svg-id="1181dba727444047b53b4924eb63e3f0.svg" data-svg-type="shape" data-display-mode="stretch" data-strokewidth="0" data-viewbox="0 0 200 200" data-preserve-viewbox="ignore" style="top:;bottom:;left:;right:;width:312px;height:120px;position:" class="style-k2rzgxrr" id="comp-k2s0l4ds">
                                    <div id="comp-k2s0l4dslink" class="style-k2rzgxrrlink">
                                      <div style="stroke-width:0;fill-opacity:1;stroke:rgba(65, 65, 65, 1);stroke-opacity:1;fill:rgba(255, 255, 255, 1)" class="style-k2rzgxrr_comp-k2s0l4ds style-k2rzgxrr_non-scaling-stroke style-k2rzgxrr_with-shadow style-k2rzgxrrsvg" id="comp-k2s0l4dssvg">
                                        <svg height="100%" width="100%">
                                          <defs>
                                            <filter x="-9" y="-9" width="334" height="142" filterUnits="userSpaceOnUse" id="comp-k2s0l4ds-shadow" color-interpolation-filters="sRGB">
                                              <fecomponenttransfer result="srcRGB"></fecomponenttransfer>
                                              <fegaussianblur stdDeviation="3" in="SourceAlpha"></fegaussianblur>
                                              <feoffset dx="4" dy="4"></feoffset>
                                              <fecolormatrix type="matrix" values="0 0 0 0 0
     0 0 0 0 0
     0 0 0 0 0
     0 0 0 0.3 0"></fecolormatrix>
                                              <femerge>
                                                <femergenode></femergenode>
                                                <femergenode in="SourceGraphic"></femergenode>
                                              </femerge>
                                              <fecomponenttransfer></fecomponenttransfer>
                                            </filter>
                                          </defs>
                                          <g filter="url(#comp-k2s0l4ds-shadow)">
                                            <svg preserveAspectRatio="none" data-bbox="20 69 160 62" viewBox="20 69 160 62" height="100%" width="100%" xmlns="http://www.w3.org/2000/svg" data-type="shape" role="img">
                                              <g>
                                                <path d="M166.554 131H33.446C26.094 131 20 124.984 20 117.513V82.487C20 75.113 25.998 69 33.446 69h133.108C173.906 69 180 75.016 180 82.487v35.027c0 7.47-6.094 13.486-13.446 13.486z"></path>
                                              </g>
                                            </svg>

                                          </g>
                                        </svg>
                                      </div>
                                    </div>
                                  </div>
                                  <div data-packed="true" style="width: 238px; pointer-events: none;" class="txtNew" id="comp-k2s0l4eo">
                                    <h2 class="font_2" style="text-align:center;"><span style="color:#000000;"><span style="font-weight:bold;"><span style="font-family:avenir-lt-w01_35-light1475496,sans-serif;">Debt to suppliers</span></span></span></h2>
                                  </div>
                                  <div data-packed="true" style="width: 123px; pointer-events: none;" class="txtNew" id="comp-k2s0l4ie">
                                    <h2 class="font_2" style="font-size:47px;"><span style="font-size:47px;"><span style="color:rgb(99, 99, 99);">937 €</span></span></h2>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div style="pointer-events:none;top:;bottom:;left:;right:;position:" class="s_BIwzIGroupSkin" id="comp-k2t2aykn">
                            <div class="s_BIwzIGroupSkininlineContent" style="pointer-events:none" id="comp-k2t2aykninlineContent">
                              <style id="comp-k2t2aykn-mesh-styles">
                                #comp-k2t2aykninlineContent {
                                  height: auto;
                                  width: 312px;
                                  position: relative;
                                }

                                #comp-k2t2aykninlineContent-gridWrapper {
                                  pointer-events: none;
                                }

                                #comp-k2t2aykninlineContent-gridContainer {
                                  position: static;
                                  display: grid;
                                  height: auto;
                                  width: 100%;
                                  min-height: auto;
                                  grid-template-rows: min-content min-content min-content min-content min-content min-content min-content 1fr;
                                  grid-template-columns: 100%;
                                }

                                #comp-k2s0pqs3 {
                                  position: relative;
                                  margin: 0px 0px 0px 0;
                                  left: 0px;
                                  grid-area: 1 / 1 / 9 / 2;
                                  justify-self: start;
                                  align-self: start;
                                }

                                #comp-k2s0pqsz {
                                  position: relative;
                                  margin: 8px 0px 0 0;
                                  left: 70px;
                                  grid-area: 1 / 1 / 2 / 2;
                                  justify-self: start;
                                  align-self: start;
                                }

                                #comp-k2s0pquf {
                                  position: relative;
                                  margin: 0px 0px 7px 0;
                                  left: 33px;
                                  grid-area: 2 / 1 / 3 / 2;
                                  justify-self: start;
                                  align-self: start;
                                }

                                #comp-k2s0swsk {
                                  position: relative;
                                  margin: 0px 0px 6px 0;
                                  left: 21px;
                                  grid-area: 3 / 1 / 4 / 2;
                                  justify-self: start;
                                  align-self: start;
                                }

                                #comp-k2s0txdi {
                                  position: relative;
                                  margin: 0px 0px 8px 0;
                                  left: 21px;
                                  grid-area: 4 / 1 / 5 / 2;
                                  justify-self: start;
                                  align-self: start;
                                }

                                #comp-k2s0u6zy {
                                  position: relative;
                                  margin: 0px 0px 5px 0;
                                  left: 21px;
                                  grid-area: 5 / 1 / 6 / 2;
                                  justify-self: start;
                                  align-self: start;
                                }

                                #comp-k2s0wxaj {
                                  position: relative;
                                  margin: 0px 0px 5px 0;
                                  left: 21px;
                                  grid-area: 6 / 1 / 7 / 2;
                                  justify-self: start;
                                  align-self: start;
                                }

                                #comp-k2s0wxb6 {
                                  position: relative;
                                  margin: 0px 0px 30px 0;
                                  left: 21px;
                                  grid-area: 7 / 1 / 8 / 2;
                                  justify-self: start;
                                  align-self: start;
                                }

                                #comp-k2t2aykncenteredContent {
                                  position: relative;
                                }

                                #comp-k2t2aykninlineContent-gridContainer>* {
                                  pointer-events: auto;
                                }

                                #comp-k2t2aykninlineContent-gridContainer>[id$="-rotated-wrapper"] {
                                  pointer-events: none;
                                }

                                #comp-k2t2aykninlineContent-gridContainer>[id$="-rotated-wrapper"]>* {
                                  pointer-events: auto;
                                }
                              </style>
                              <div id="comp-k2t2aykninlineContent-gridWrapper" data-mesh-internal="true">
                                <div id="comp-k2t2aykninlineContent-gridContainer" data-mesh-internal="true">
                                  <div data-svg-id="1181dba727444047b53b4924eb63e3f0.svg" data-svg-type="shape" data-display-mode="stretch" data-strokewidth="0" data-viewbox="0 0 200 200" data-preserve-viewbox="ignore" style="top:;bottom:;left:;right:;width:312px;height:240px;position:" class="style-k2rzgxrr" id="comp-k2s0pqs3">
                                    <div id="comp-k2s0pqs3link" class="style-k2rzgxrrlink">
                                      <div style="stroke-width:0;fill-opacity:1;stroke:rgba(65, 65, 65, 1);stroke-opacity:1;fill:rgba(255, 255, 255, 1)" class="style-k2rzgxrr_comp-k2s0pqs3 style-k2rzgxrr_non-scaling-stroke style-k2rzgxrr_with-shadow style-k2rzgxrrsvg" id="comp-k2s0pqs3svg">
                                        <svg height="100%" width="100%">
                                          <defs>
                                            <filter x="-9" y="-9" width="334" height="262" filterUnits="userSpaceOnUse" id="comp-k2s0pqs3-shadow" color-interpolation-filters="sRGB">
                                              <fecomponenttransfer result="srcRGB"></fecomponenttransfer>
                                              <fegaussianblur stdDeviation="3" in="SourceAlpha"></fegaussianblur>
                                              <feoffset dx="4" dy="4"></feoffset>
                                              <fecolormatrix type="matrix" values="0 0 0 0 0
     0 0 0 0 0
     0 0 0 0 0
     0 0 0 0.3 0"></fecolormatrix>
                                              <femerge>
                                                <femergenode></femergenode>
                                                <femergenode in="SourceGraphic"></femergenode>
                                              </femerge>
                                              <fecomponenttransfer></fecomponenttransfer>
                                            </filter>
                                          </defs>
                                          <g filter="url(#comp-k2s0pqs3-shadow)">
                                            <svg preserveAspectRatio="none" data-bbox="20 69 160 62" viewBox="20 69 160 62" height="100%" width="100%" xmlns="http://www.w3.org/2000/svg" data-type="shape" role="img">
                                              <g>
                                                <path d="M166.554 131H33.446C26.094 131 20 124.984 20 117.513V82.487C20 75.113 25.998 69 33.446 69h133.108C173.906 69 180 75.016 180 82.487v35.027c0 7.47-6.094 13.486-13.446 13.486z"></path>
                                              </g>
                                            </svg>

                                          </g>
                                        </svg>
                                      </div>
                                    </div>
                                  </div>
                                  <div data-packed="true" style="width: 180px; pointer-events: none;" class="txtNew" id="comp-k2s0pqsz">
                                    <h2 class="font_2" style="text-align:center;"><span style="color:#000000;"><span style="font-weight:bold;"><span style="font-family:avenir-lt-w01_35-light1475496,sans-serif;">Top 5 sellers</span></span></span></h2>
                                  </div>
                                  <div data-packed="true" style="width: 254px; pointer-events: none;" class="txtNew" id="comp-k2s0pquf">
                                    <h2 class="font_2" style="font-size:24px;"><span style="font-weight:bold;"><span style="font-size:24px;"><span style="color:rgb(99, 99, 99);">&nbsp;Name&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Price</span></span></span></h2>
                                  </div>
                                  <div data-packed="true" style="width: 270px; pointer-events: none;" class="txtNew" id="comp-k2s0swsk">
                                    <h2 class="font_2" style="font-size:20px;"><span style="font-size:20px;"><span style="color:rgb(99, 99, 99);">&nbsp;Harry Potter&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;7.99€</span></span></h2>
                                  </div>
                                  <div data-packed="true" style="width: 270px; pointer-events: none;" class="txtNew" id="comp-k2s0txdi">
                                    <h2 class="font_2" style="font-size:20px;"><span style="font-size:20px;"><span style="color:rgb(99, 99, 99);">&nbsp;Moby Dick&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;8.99€</span></span></h2>
                                  </div>
                                  <div data-packed="true" style="width: 270px; pointer-events: none;" class="txtNew" id="comp-k2s0u6zy">
                                    <h2 class="font_2" style="font-size:20px;"><span style="font-size:20px;"><span style="color:rgb(99, 99, 99);">&nbsp;The Trial&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;9.99€</span></span></h2>
                                  </div>
                                  <div data-packed="true" style="width: 270px; pointer-events: none;" class="txtNew" id="comp-k2s0wxaj">
                                    <h2 class="font_2" style="font-size:20px;"><span style="font-size:20px;"><span style="color:rgb(99, 99, 99);">&nbsp;Emma&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;6.50€</span></span></h2>
                                  </div>
                                  <div data-packed="true" style="width: 270px; pointer-events: none;" class="txtNew" id="comp-k2s0wxb6">
                                    <h2 class="font_2" style="font-size:20px;"><span style="font-size:20px;"><span style="color:rgb(99, 99, 99);">&nbsp;Dead Souls&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;11.99€</span></span></h2>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div style="width: 538px; height: 518px;" title="" data-is-responsive="false" data-display-mode="fill" data-content-padding-horizontal="0" data-content-padding-vertical="0" data-exact-height="518" class="ca1" id="comp-k2s14bet">
                            <div style="width: 538px; height: 518px;" id="comp-k2s14betlink" class="ca1link">
                              <wix-image style="width:538px;height:518px;top:0;left:0" data-has-bg-scroll-effect="" data-image-info="{&quot;imageData&quot;:{&quot;type&quot;:&quot;Image&quot;,&quot;id&quot;:&quot;dataItem-k2s14bi3&quot;,&quot;metaData&quot;:{&quot;pageId&quot;:&quot;dhhnr&quot;,&quot;isPreset&quot;:false,&quot;schemaVersion&quot;:&quot;2.0&quot;,&quot;isHidden&quot;:false},&quot;title&quot;:&quot;&quot;,&quot;uri&quot;:&quot;70eda8_3117966b0a954ac8b3198371e7a85669~mv2.png&quot;,&quot;description&quot;:&quot;&quot;,&quot;width&quot;:512,&quot;height&quot;:512,&quot;alt&quot;:&quot;c61744fdba0568dac9821de080fa3391-line-gr&quot;,&quot;name&quot;:&quot;c61744fdba0568dac9821de080fa3391-line-gr&quot;,&quot;displayMode&quot;:&quot;fill&quot;},&quot;containerId&quot;:&quot;comp-k2s14bet&quot;,&quot;displayMode&quot;:&quot;fill&quot;}" data-is-svg="false" id="comp-k2s14betimg" class="ca1img" data-src="https://static.wixstatic.com/media/70eda8_3117966b0a954ac8b3198371e7a85669~mv2.png/v1/fill/w_538,h_518,al_c,lg_1,q_80/c61744fdba0568dac9821de080fa3391-line-gr.webp"><img id="comp-k2s14betimgimage" style="object-position:50% 50%;width:538px;height:518px;object-fit:cover" alt="c61744fdba0568dac9821de080fa3391-line-gr" data-type="image" itemprop="image" src="./Overview _ bookstore_files/c61744fdba0568dac9821de080fa3391-line-gr.webp" data-src=""></wix-image>
                            </div>
                          </div>
                          <div style="width: 531px; height: 232px;" title="" data-is-responsive="false" data-display-mode="fill" data-content-padding-horizontal="0" data-content-padding-vertical="0" data-exact-height="232" class="ca1" id="comp-k2s1ihjs">
                            <div style="width: 531px; height: 232px;" id="comp-k2s1ihjslink" class="ca1link">
                              <wix-image style="width:531px;height:232px;top:0;left:0" data-has-bg-scroll-effect="" data-image-info="{&quot;imageData&quot;:{&quot;type&quot;:&quot;Image&quot;,&quot;id&quot;:&quot;dataItem-k2s1ihp1&quot;,&quot;metaData&quot;:{&quot;pageId&quot;:&quot;dhhnr&quot;,&quot;isPreset&quot;:false,&quot;schemaVersion&quot;:&quot;2.0&quot;,&quot;isHidden&quot;:false},&quot;title&quot;:&quot;&quot;,&quot;uri&quot;:&quot;70eda8_c77d2e2ce4a44b9285e7587dc2fe0d5a~mv2.png&quot;,&quot;description&quot;:&quot;&quot;,&quot;width&quot;:700,&quot;height&quot;:312,&quot;alt&quot;:&quot;edited-graph.png_w=700&amp;h=312&amp;crop=1.png&quot;,&quot;name&quot;:&quot;edited-graph.png_w=700&amp;h=312&amp;crop=1.png&quot;,&quot;displayMode&quot;:&quot;fill&quot;},&quot;containerId&quot;:&quot;comp-k2s1ihjs&quot;,&quot;displayMode&quot;:&quot;fill&quot;}" data-is-svg="false" id="comp-k2s1ihjsimg" class="ca1img" data-src="https://static.wixstatic.com/media/70eda8_c77d2e2ce4a44b9285e7587dc2fe0d5a~mv2.png/v1/fill/w_531,h_232,al_c,q_80,usm_0.66_1.00_0.01/edited-graph_png_w%3D700%26h%3D312%26crop%3D1.webp"><img id="comp-k2s1ihjsimgimage" style="object-position:50% 50%;width:531px;height:232px;object-fit:cover" alt="edited-graph.png_w=700&amp;h=312&amp;crop=1.png" data-type="image" itemprop="image" src="./Overview _ bookstore_files/edited-graph_png_w=700&amp;h=312&amp;crop=1.webp" data-src=""></wix-image>
                            </div>
                          </div>
                          <div data-packed="true" style="width: 314px; pointer-events: none;" class="txtNew" id="comp-k2s1jpo1">
                            <h2 class="font_2" style="text-align:center;"><span style="color:#000000;"><span style="font-weight:bold;"><span style="font-family:avenir-lt-w01_35-light1475496,sans-serif;">Income vs expenses</span></span></span></h2>
                          </div>
                          <div data-packed="true" style="width: 314px; pointer-events: none;" class="txtNew" id="comp-k2s1kjng">
                            <h2 class="font_2" style="text-align:center;"><span style="color:#000000;"><span style="font-weight:bold;"><span style="font-family:avenir-lt-w01_35-light1475496,sans-serif;">Revenue&nbsp;per months</span></span></span></h2>
                          </div>
                          <div id="dhhnrinlineContent-wedge-4" data-mesh-internal="true"></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </main>
          <footer style="bottom:auto;left:0;margin-left:0;width:100%;min-width:980px;top:;right:;position:" class="style-k2t63ira_footer style-k2t63ira" tabindex="-1" data-site-width="980" data-fixedposition="false" data-isrunninginmobile="false" data-state=" " id="SITE_FOOTER">
            <div style="left:0;width:100%" id="SITE_FOOTERscreenWidthBackground" class="style-k2t63irascreenWidthBackground"></div>
            <div style="width:100%" id="SITE_FOOTERcenteredContent" class="style-k2t63iracenteredContent">
              <div style="margin-left:calc((100% - 980px) / 2);width:980px" id="SITE_FOOTERbg" class="style-k2t63irabg"></div>
              <div id="SITE_FOOTERinlineContent" class="style-k2t63irainlineContent">
                <style id="SITE_FOOTER-mesh-styles">
                  #SITE_FOOTERinlineContent {
                    height: auto;
                    width: 100%;
                    position: relative;
                  }

                  #SITE_FOOTERinlineContent-gridWrapper {
                    pointer-events: none;
                  }

                  #SITE_FOOTERinlineContent-gridContainer {
                    position: static;
                    display: grid;
                    height: auto;
                    width: 100%;
                    min-height: auto;
                    grid-template-rows: min-content 1fr;
                    grid-template-columns: 100%;
                  }

                  #comp-j8lcmr1n {
                    position: relative;
                    margin: 12px 0px 13px calc((100% - 980px) * 0.5);
                    left: 23px;
                    grid-area: 1 / 1 / 2 / 2;
                    justify-self: start;
                    align-self: start;
                  }

                  #comp-j8layux6 {
                    position: relative;
                    margin: 0px 0px 42px calc((100% - 980px) * 0.5);
                    left: 890px;
                    grid-area: 2 / 1 / 3 / 2;
                    justify-self: start;
                    align-self: start;
                  }

                  #SITE_FOOTERcenteredContent {
                    position: relative;
                  }

                  #SITE_FOOTERinlineContent-gridContainer>* {
                    pointer-events: auto;
                  }

                  #SITE_FOOTERinlineContent-gridContainer>[id$="-rotated-wrapper"] {
                    pointer-events: none;
                  }

                  #SITE_FOOTERinlineContent-gridContainer>[id$="-rotated-wrapper"]>* {
                    pointer-events: auto;
                  }
                </style>
                <div id="SITE_FOOTERinlineContent-gridWrapper" data-mesh-internal="true">
                  <div id="SITE_FOOTERinlineContent-gridContainer" data-mesh-internal="true">
                    <div data-border-width="1px" style="transform-origin:center 0.5px;top:;bottom:;left:;right:;width:938px;height:5px;position:" class="style-jepv3jl2" id="comp-j8lcmr1n"></div>
                    <div data-is-responsive="false" style="width:70px;height:18px;top:;bottom:;left:;right:;position:" data-hide-prejs="true" class="lb1" id="comp-j8layux6">
                      <ul aria-label="Social bar" id="comp-j8layux6itemsContainer" class="lb1itemsContainer">
                        <li style="width:18px;height:18px;margin-bottom:0;margin-right:8px;display:inline-block" class="lb1imageItem" id="comp-j8layux60image"><a href="http://www.facebook.com/wix" target="_blank" data-content="http://www.facebook.com/wix" data-type="external" rel="nofollow noopener noreferrer" id="comp-j8layux60imagelink" class="lb1imageItemlink">
                            <wix-image style="width:18px;height:18px;position:absolute" data-has-bg-scroll-effect="" data-image-info="{&quot;imageData&quot;:{&quot;type&quot;:&quot;Image&quot;,&quot;id&quot;:&quot;dataItem-j8layv0v1&quot;,&quot;metaData&quot;:{&quot;pageId&quot;:&quot;masterPage&quot;,&quot;isPreset&quot;:true,&quot;schemaVersion&quot;:&quot;2.0&quot;,&quot;isHidden&quot;:false},&quot;title&quot;:&quot;Grey Facebook Icon&quot;,&quot;uri&quot;:&quot;d3470ec8ca26475da4b228f0199b5d3d.png&quot;,&quot;description&quot;:&quot;&quot;,&quot;width&quot;:200,&quot;height&quot;:200,&quot;alt&quot;:&quot;Grey Facebook Icon&quot;,&quot;link&quot;:{&quot;type&quot;:&quot;ExternalLink&quot;,&quot;id&quot;:&quot;dataItem-j8layv0v2&quot;,&quot;metaData&quot;:{&quot;pageId&quot;:&quot;masterPage&quot;,&quot;isPreset&quot;:true,&quot;schemaVersion&quot;:&quot;1.0&quot;,&quot;isHidden&quot;:false},&quot;url&quot;:&quot;http://www.facebook.com/wix&quot;,&quot;target&quot;:&quot;_blank&quot;},&quot;displayMode&quot;:&quot;fill&quot;},&quot;containerId&quot;:&quot;comp-j8layux6&quot;,&quot;displayMode&quot;:&quot;fill&quot;}" data-is-svg="false" id="comp-j8layux60imageimage" class="lb1imageItemimage" data-src="https://static.wixstatic.com/media/d3470ec8ca26475da4b228f0199b5d3d.png/v1/fill/w_18,h_18,al_c,q_80,usm_0.66_1.00_0.01/d3470ec8ca26475da4b228f0199b5d3d.webp"><img id="comp-j8layux60imageimageimage" alt="Grey Facebook Icon" data-type="image" itemprop="image" src="./Overview _ bookstore_files/d3470ec8ca26475da4b228f0199b5d3d.webp" data-src="" style="width: 18px; height: 18px; object-fit: cover;"></wix-image>
                          </a></li>
                        <li style="width:18px;height:18px;margin-bottom:0;margin-right:8px;display:inline-block" class="lb1imageItem" id="comp-j8layux61image"><a href="https://instagram.com/wix/" target="_blank" data-content="https://instagram.com/wix/" data-type="external" rel="nofollow noopener noreferrer" id="comp-j8layux61imagelink" class="lb1imageItemlink">
                            <wix-image style="width:18px;height:18px;position:absolute" data-has-bg-scroll-effect="" data-image-info="{&quot;imageData&quot;:{&quot;type&quot;:&quot;Image&quot;,&quot;id&quot;:&quot;dataItem-j8layv0z&quot;,&quot;metaData&quot;:{&quot;pageId&quot;:&quot;masterPage&quot;,&quot;isPreset&quot;:true,&quot;schemaVersion&quot;:&quot;2.0&quot;,&quot;isHidden&quot;:false},&quot;title&quot;:&quot;Grey Instagram Icon&quot;,&quot;uri&quot;:&quot;d7ffe259c9e54f59837481b3dd0130eb.png&quot;,&quot;description&quot;:&quot;&quot;,&quot;width&quot;:200,&quot;height&quot;:200,&quot;alt&quot;:&quot;Grey Instagram Icon&quot;,&quot;link&quot;:{&quot;type&quot;:&quot;ExternalLink&quot;,&quot;id&quot;:&quot;dataItem-j8layv0z1&quot;,&quot;metaData&quot;:{&quot;pageId&quot;:&quot;masterPage&quot;,&quot;isPreset&quot;:true,&quot;schemaVersion&quot;:&quot;1.0&quot;,&quot;isHidden&quot;:false},&quot;url&quot;:&quot;https://instagram.com/wix/&quot;,&quot;target&quot;:&quot;_blank&quot;},&quot;displayMode&quot;:&quot;fill&quot;},&quot;containerId&quot;:&quot;comp-j8layux6&quot;,&quot;displayMode&quot;:&quot;fill&quot;}" data-is-svg="false" id="comp-j8layux61imageimage" class="lb1imageItemimage" data-src="https://static.wixstatic.com/media/d7ffe259c9e54f59837481b3dd0130eb.png/v1/fill/w_18,h_18,al_c,q_80,usm_0.66_1.00_0.01/d7ffe259c9e54f59837481b3dd0130eb.webp"><img id="comp-j8layux61imageimageimage" alt="Grey Instagram Icon" data-type="image" itemprop="image" src="./Overview _ bookstore_files/d7ffe259c9e54f59837481b3dd0130eb.webp" data-src="" style="width: 18px; height: 18px; object-fit: cover;"></wix-image>
                          </a></li>
                        <li style="width:18px;height:18px;margin-bottom:0;margin-right:8px;display:inline-block" class="lb1imageItem" id="comp-j8layux62image"><a href="http://vimeo.com/wix" target="_blank" data-content="http://vimeo.com/wix" data-type="external" rel="nofollow noopener noreferrer" id="comp-j8layux62imagelink" class="lb1imageItemlink">
                            <wix-image style="width:18px;height:18px;position:absolute" data-has-bg-scroll-effect="" data-image-info="{&quot;imageData&quot;:{&quot;type&quot;:&quot;Image&quot;,&quot;id&quot;:&quot;dataItem-j8layv0z2&quot;,&quot;metaData&quot;:{&quot;pageId&quot;:&quot;masterPage&quot;,&quot;isPreset&quot;:true,&quot;schemaVersion&quot;:&quot;2.0&quot;,&quot;isHidden&quot;:false},&quot;title&quot;:&quot;Grey Vimeo Icon&quot;,&quot;uri&quot;:&quot;1422b22453ff489bbe36b58b1e642f3e.png&quot;,&quot;width&quot;:200,&quot;height&quot;:200,&quot;alt&quot;:&quot;Grey Vimeo Icon&quot;,&quot;link&quot;:{&quot;type&quot;:&quot;ExternalLink&quot;,&quot;id&quot;:&quot;dataItem-jahyibiq&quot;,&quot;metaData&quot;:{&quot;pageId&quot;:&quot;masterPage&quot;,&quot;isPreset&quot;:true,&quot;schemaVersion&quot;:&quot;1.0&quot;,&quot;isHidden&quot;:false},&quot;url&quot;:&quot;http://vimeo.com/wix&quot;,&quot;target&quot;:&quot;_blank&quot;},&quot;displayMode&quot;:&quot;fill&quot;},&quot;containerId&quot;:&quot;comp-j8layux6&quot;,&quot;displayMode&quot;:&quot;fill&quot;}" data-is-svg="false" id="comp-j8layux62imageimage" class="lb1imageItemimage" data-src="https://static.wixstatic.com/media/1422b22453ff489bbe36b58b1e642f3e.png/v1/fill/w_18,h_18,al_c,q_80,usm_0.66_1.00_0.01/1422b22453ff489bbe36b58b1e642f3e.webp"><img id="comp-j8layux62imageimageimage" alt="Grey Vimeo Icon" data-type="image" itemprop="image" src="./Overview _ bookstore_files/1422b22453ff489bbe36b58b1e642f3e.webp" data-src="" style="width: 18px; height: 18px; object-fit: cover;"></wix-image>
                          </a></li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </footer>
          <div id="pinnedAfterPAGES_CONTAINER" style="top:0;left:0;position:fixed;width:100%;height:calc(100% - 50px);margin-top:50px;z-index:50;display:grid;grid-template-columns:1fr;grid-template-rows:1fr;pointer-events:none">
            <style id="pinnedAfterPAGES_CONTAINER-style">
              #comp-j8lc2o2w {
                justify-self: start;
                margin-left: 64px;
                align-self: start;
                margin-top: 182px;
                position: absolute;
                grid-area: 1 / 1 / 2 / 2;
                pointer-events: auto;
              }
            </style>
            <nav aria-label="Site" style="height:;top:;bottom:;left:;right:;width:141px;z-index:50" class="style-j8lb5r6x2" data-state="subMenuOpenSide-right items-align-left subItems-align-left notMobile" id="comp-j8lc2o2w" data-param-border="0" data-param-separator="0" data-param-padding="0" data-open-direction="subMenuOpenDir-down">
              <ul class="style-j8lb5r6x2menuContainer">
                <li class="style-j8lb5r6x2_selected style-j8lb5r6x2_item style-j8lb5r6x2_itemWrapper " style="min-height:35px;height:35px" id="root0_"><a class=" style-j8lb5r6x2_label level0" style="line-height:35px" aria-haspopup="false" href="./overview" target="_self">Overview</a>
                  <ul style="margin-bottom:" class="style-j8lb5r6x2_subMenu  style-j8lb5r6x2_emptySubMenu"></ul>
                </li>
                <li class="style-j8lb5r6x2_item style-j8lb5r6x2_itemWrapper " style="min-height:35px;height:35px" id="root1_"><a class=" style-j8lb5r6x2_label level0" style="line-height:35px" aria-haspopup="false" href="./sales" target="_self">Sales</a>
                  <ul style="margin-bottom:" class="style-j8lb5r6x2_subMenu  style-j8lb5r6x2_emptySubMenu"></ul>
                </li>
                <li class="style-j8lb5r6x2_item style-j8lb5r6x2_itemWrapper " style="min-height:35px;height:35px" id="root2_"><a class=" style-j8lb5r6x2_label level0" style="line-height:35px" aria-haspopup="false" href="./finances" target="_self">Finances</a>
                  <ul style="margin-bottom:" class="style-j8lb5r6x2_subMenu  style-j8lb5r6x2_emptySubMenu"></ul>
                </li>
                <li class="style-j8lb5r6x2_item style-j8lb5r6x2_itemWrapper " style="min-height:35px;height:35px" id="root3_"><a class=" style-j8lb5r6x2_label level0" style="line-height:35px" aria-haspopup="false" href="./inventory" target="_self">Inventory</a>
                  <ul style="margin-bottom:" class="style-j8lb5r6x2_subMenu  style-j8lb5r6x2_emptySubMenu"></ul>
                </li>
                <li class="style-j8lb5r6x2_item style-j8lb5r6x2_itemWrapper " style="min-height:35px;height:35px" id="root4_"><a class=" style-j8lb5r6x2_label level0" style="line-height:35px" aria-haspopup="false" href="./logistics" target="_self">Logistics</a>
                  <ul style="margin-bottom:" class="style-j8lb5r6x2_subMenu  style-j8lb5r6x2_emptySubMenu"></ul>
                </li>
              </ul>
            </nav>
          </div>
        </div>
      </div>
      <div id="WIX_ADS" class="wix-ads-2 visible desktop">
        <style type="text/css" data-styleid="wixAds-style">
          @charset "UTF-8";

          /*the ad font is Helvetica. we don't wont users to use it in the sites, so we changed the name of the font */
          @font-face {
            font-family: "wixFreemiumFontW01-35Thin";
            src: url("//static.parastorage.com/services/third-party/fonts/Helvetica/Fonts/56be84de-9d60-4089-8df0-0ea6ec786b84.eot?#iefix");
            src: url("//static.parastorage.com/services/third-party/fonts/Helvetica/Fonts/56be84de-9d60-4089-8df0-0ea6ec786b84.eot?#iefix") format("eot"), url("//static.parastorage.com/services/third-party/fonts/Helvetica/Fonts/50d35bbc-dfd4-48f1-af16-cf058f69421d.woff") format("woff"), url("//static.parastorage.com/services/third-party/fonts/Helvetica/Fonts/278bef59-6be1-4800-b5ac-1f769ab47430.ttf") format("truetype"), url("//static.parastorage.com/services/third-party/fonts/Helvetica/Fonts/2e309b1b-08b8-477f-bc9e-7067cf0af0b3.svg#2e309b1b-08b8-477f-bc9e-7067cf0af0b3") format("svg");
          }

          @font-face {
            font-family: "wixFreemiumFontW01-45Ligh";
            src: url("//static.parastorage.com/services/third-party/fonts/Helvetica/Fonts/ae1656aa-5f8f-4905-aed0-93e667bd6e4a.eot?#iefix");
            src: url("//static.parastorage.com/services/third-party/fonts/Helvetica/Fonts/ae1656aa-5f8f-4905-aed0-93e667bd6e4a.eot?#iefix") format("eot"), url("//static.parastorage.com/services/third-party/fonts/Helvetica/Fonts/530dee22-e3c1-4e9f-bf62-c31d510d9656.woff") format("woff"), url("//static.parastorage.com/services/third-party/fonts/Helvetica/Fonts/688ab72b-4deb-4e15-a088-89166978d469.ttf") format("truetype"), url("//static.parastorage.com/services/third-party/fonts/Helvetica/Fonts/7816f72f-f47e-4715-8cd7-960e3723846a.svg#7816f72f-f47e-4715-8cd7-960e3723846a") format("svg");
          }

          @font-face {
            font-family: "wixFreemiumFontW01-55Roma";
            src: url("//static.parastorage.com/services/third-party/fonts/Helvetica/Fonts/b7693a83-b861-4aa6-85e0-9ecf676bc4d6.eot?#iefix");
            src: url("//static.parastorage.com/services/third-party/fonts/Helvetica/Fonts/b7693a83-b861-4aa6-85e0-9ecf676bc4d6.eot?#iefix") format("eot"), url("//static.parastorage.com/services/third-party/fonts/Helvetica/Fonts/bcf54343-d033-41ee-bbd7-2b77df3fe7ba.woff") format("woff"), url("//static.parastorage.com/services/third-party/fonts/Helvetica/Fonts/b0ffdcf0-26da-47fd-8485-20e4a40d4b7d.ttf") format("truetype"), url("//static.parastorage.com/services/third-party/fonts/Helvetica/Fonts/da09f1f1-062a-45af-86e1-2bbdb3dd94f9.svg#da09f1f1-062a-45af-86e1-2bbdb3dd94f9") format("svg");
          }

          @font-face {
            font-family: "wixFreemiumFontW01-65Medi";
            font-weight: bold;
            src: url("//static.parastorage.com/services/third-party/fonts/Helvetica/Fonts/07fe0fec-b63f-4963-8ee1-535528b67fdb.eot?#iefix");
            src: url("//static.parastorage.com/services/third-party/fonts/Helvetica/Fonts/07fe0fec-b63f-4963-8ee1-535528b67fdb.eot?#iefix") format("eot"), url("//static.parastorage.com/services/third-party/fonts/Helvetica/Fonts/60be5c39-863e-40cb-9434-6ebafb62ab2b.woff") format("woff"), url("//static.parastorage.com/services/third-party/fonts/Helvetica/Fonts/4c6503c9-859b-4d3b-a1d5-2d42e1222415.ttf") format("truetype"), url("//static.parastorage.com/services/third-party/fonts/Helvetica/Fonts/36c182c6-ef98-4021-9b0d-d63122c2bbf5.svg#36c182c6-ef98-4021-9b0d-d63122c2bbf5") format("svg");
          }

          @font-face {
            font-family: "wixFreemiumFontW02-35Thin";
            src: url("//static.parastorage.com/services/third-party/fonts/Helvetica/Fonts/30b6ffc3-3b64-40dd-9ff8-a3a850daf535.eot?#iefix");
            src: url("//static.parastorage.com/services/third-party/fonts/Helvetica/Fonts/30b6ffc3-3b64-40dd-9ff8-a3a850daf535.eot?#iefix") format("eot"), url("//static.parastorage.com/services/third-party/fonts/Helvetica/Fonts/775a65da-14aa-4634-be95-6724c05fd522.woff") format("woff"), url("//static.parastorage.com/services/third-party/fonts/Helvetica/Fonts/988eaaa7-5565-4f65-bb17-146b650ce9e9.ttf") format("truetype"), url("//static.parastorage.com/services/third-party/fonts/Helvetica/Fonts/3503a1a6-91c3-4c42-8e66-2ea7b2b57541.svg#3503a1a6-91c3-4c42-8e66-2ea7b2b57541") format("svg");
          }

          @font-face {
            font-family: "wixFreemiumFontW02-45Ligh";
            src: url("//static.parastorage.com/services/third-party/fonts/Helvetica/Fonts/88fcd49a-13c7-4d0c-86b1-ad1e258bd75d.eot?#iefix");
            src: url("//static.parastorage.com/services/third-party/fonts/Helvetica/Fonts/88fcd49a-13c7-4d0c-86b1-ad1e258bd75d.eot?#iefix") format("eot"), url("//static.parastorage.com/services/third-party/fonts/Helvetica/Fonts/9a2e4855-380f-477f-950e-d98e8db54eac.woff") format("woff"), url("//static.parastorage.com/services/third-party/fonts/Helvetica/Fonts/fa82d0ee-4fbd-4cc9-bf9f-226ad1fcbae2.ttf") format("truetype"), url("//static.parastorage.com/services/third-party/fonts/Helvetica/Fonts/48d599a6-92b5-4d43-a4ac-8959f6971853.svg#48d599a6-92b5-4d43-a4ac-8959f6971853") format("svg");
          }

          @font-face {
            font-family: "wixFreemiumFontW02-55Roma";
            src: url("//static.parastorage.com/services/third-party/fonts/Helvetica/Fonts/0b3a3fca-0fad-402b-bd38-fdcbad1ef776.eot?#iefix");
            src: url("//static.parastorage.com/services/third-party/fonts/Helvetica/Fonts/0b3a3fca-0fad-402b-bd38-fdcbad1ef776.eot?#iefix") format("eot"), url("//static.parastorage.com/services/third-party/fonts/Helvetica/Fonts/d5af76d8-a90b-4527-b3a3-182207cc3250.woff") format("woff"), url("//static.parastorage.com/services/third-party/fonts/Helvetica/Fonts/1d238354-d156-4dde-89ea-4770ef04b9f9.ttf") format("truetype"), url("//static.parastorage.com/services/third-party/fonts/Helvetica/Fonts/b68875cb-14a9-472e-8177-0247605124d7.svg#b68875cb-14a9-472e-8177-0247605124d7") format("svg");
          }

          @font-face {
            font-family: "wixFreemiumFontW02-65Medi";
            font-weight: bold;
            src: url("//static.parastorage.com/services/third-party/fonts/Helvetica/Fonts/55f60419-09c3-42bd-b81f-1983ff093852.eot?#iefix");
            src: url("//static.parastorage.com/services/third-party/fonts/Helvetica/Fonts/55f60419-09c3-42bd-b81f-1983ff093852.eot?#iefix") format("eot"), url("//static.parastorage.com/services/third-party/fonts/Helvetica/Fonts/5b4a262e-3342-44e2-8ad7-719998a68134.woff") format("woff"), url("//static.parastorage.com/services/third-party/fonts/Helvetica/Fonts/4a3ef5d8-cfd9-4b96-bd67-90215512f1e5.ttf") format("truetype"), url("//static.parastorage.com/services/third-party/fonts/Helvetica/Fonts/58ab5075-53ea-46e6-9783-cbb335665f88.svg#58ab5075-53ea-46e6-9783-cbb335665f88") format("svg");
          }

          @font-face {
            font-family: "wixFreemiumFontW10-35Thin";
            src: url("//static.parastorage.com/services/third-party/fonts/Helvetica/Fonts/93b6bf6a-418e-4a8f-8f79-cb9c99ef3e32.eot?#iefix");
            src: url("//static.parastorage.com/services/third-party/fonts/Helvetica/Fonts/93b6bf6a-418e-4a8f-8f79-cb9c99ef3e32.eot?#iefix") format("eot"), url("//static.parastorage.com/services/third-party/fonts/Helvetica/Fonts/c881c21b-4148-4a11-a65d-f35e42999bc8.woff") format("woff"), url("//static.parastorage.com/services/third-party/fonts/Helvetica/Fonts/03634cf1-a9c9-4e13-b049-c90d830423d4.ttf") format("truetype"), url("//static.parastorage.com/services/third-party/fonts/Helvetica/Fonts/1bc99c0a-298b-46f9-b325-18b5e5169795.svg#1bc99c0a-298b-46f9-b325-18b5e5169795") format("svg");
          }

          @font-face {
            font-family: "wixFreemiumFontW10-45Ligh";
            src: url("//static.parastorage.com/services/third-party/fonts/Helvetica/Fonts/5b85c7cc-6ad4-4226-83f5-9d19e2974123.eot?#iefix");
            src: url("//static.parastorage.com/services/third-party/fonts/Helvetica/Fonts/5b85c7cc-6ad4-4226-83f5-9d19e2974123.eot?#iefix") format("eot"), url("//static.parastorage.com/services/third-party/fonts/Helvetica/Fonts/835e7b4f-b524-4374-b57b-9a8fc555fd4e.woff") format("woff"), url("//static.parastorage.com/services/third-party/fonts/Helvetica/Fonts/2c694ef6-9615-473e-8cf4-d8d00c6bd973.ttf") format("truetype"), url("//static.parastorage.com/services/third-party/fonts/Helvetica/Fonts/3fc84193-a13f-4fe8-87f7-238748a4ac54.svg#3fc84193-a13f-4fe8-87f7-238748a4ac54") format("svg");
          }

          @font-face {
            font-family: "wixFreemiumFontW10-65Medi";
            font-weight: bold;
            src: url("//static.parastorage.com/services/third-party/fonts/Helvetica/Fonts/7092fdcc-7036-48ce-ae23-cfbc9be2e3b0.eot?#iefix");
            src: url("//static.parastorage.com/services/third-party/fonts/Helvetica/Fonts/7092fdcc-7036-48ce-ae23-cfbc9be2e3b0.eot?#iefix") format("eot"), url("//static.parastorage.com/services/third-party/fonts/Helvetica/Fonts/5b29e833-1b7a-40ab-82a5-cfd69c8650f4.woff") format("woff"), url("//static.parastorage.com/services/third-party/fonts/Helvetica/Fonts/b0298148-2d59-44d1-9ec9-1ca6bb097603.ttf") format("truetype"), url("//static.parastorage.com/services/third-party/fonts/Helvetica/Fonts/ae1dea8c-a953-4845-b616-74a257ba72e6.svg#ae1dea8c-a953-4845-b616-74a257ba72e6") format("svg");
          }

          @font-face {
            font-family: "wixFreemiumFontW10-55Roma";
            src: url("//static.parastorage.com/services/third-party/fonts/Helvetica/Fonts/f1feaed7-6bce-400a-a07e-a893ae43a680.eot?#iefix");
            src: url("//static.parastorage.com/services/third-party/fonts/Helvetica/Fonts/f1feaed7-6bce-400a-a07e-a893ae43a680.eot?#iefix") format("eot"), url("//static.parastorage.com/services/third-party/fonts/Helvetica/Fonts/8ac9e38d-29c6-41ea-8e47-4ae4d2b1a4e1.woff") format("woff"), url("//static.parastorage.com/services/third-party/fonts/Helvetica/Fonts/4bd09087-655e-4abb-844c-dccdeb68003d.ttf") format("truetype"), url("//static.parastorage.com/services/third-party/fonts/Helvetica/Fonts/df234d87-eada-4058-aa80-5871e7fbe1c3.svg#df234d87-eada-4058-aa80-5871e7fbe1c3") format("svg");
          }

          .wrapper.hidden {
            display: none;
          }

          .wrapper.visible {
            display: block;
            visibility: visible;
          }

          .wrapper .desktop-top {
            position: fixed;
            top: 0;
            right: 39px;
            border-top: solid 2px #459fed;
            border-bottom-left-radius: 10px;
            border-bottom-right-radius: 10px;
            transition: height 100ms;
            cursor: pointer;
            overflow: hidden;
            color: #ffffff;
            display: block;
            font-family: wixFreemiumFontW01-55Roma, wixFreemiumFontW02-55Roma, wixFreemiumFontW10-55Roma, Helvetica Neue, Helvetica, Arial, メイリオ, meiryo, ヒラギノ角ゴ pro w3, hiragino kaku gothic pro, sans-serif;
            letter-spacing: 0.05em;
            font-size: 13px;
            z-index: 999;
          }

          .wrapper .desktop-top:hover {
            min-height: 72px;
            background-color: #43515c;
            padding-bottom: 6px;
            word-wrap: break-word;
          }

          .wrapper .desktop-top:hover>.hover1 {
            display: block;
            font-family: wixFreemiumFontW01-35Thin, wixFreemiumFontW02-35Thin, wixFreemiumFontW10-35Thin, Helvetica Neue, Helvetica, Arial, メイリオ, meiryo, ヒラギノ角ゴ pro w3, hiragino kaku gothic pro, sans-serif;
            padding-top: 4px;
          }

          .wrapper .desktop-top:hover>.arrow,
          .wrapper .desktop-top:hover>.hover2 {
            display: inline-block;
          }

          .wrapper .desktop-top>.main {
            padding: 0 6px 0 10px;
            text-align: center;
            line-height: 26px;
            border-bottom-left-radius: 10px;
            border-bottom-right-radius: 10px;
            background-color: #20303c;
          }

          .wrapper .desktop-top>.main>.banner1,
          .wrapper .desktop-top>.main>.wix,
          .wrapper .desktop-top>.main>.banner2,
          .wrapper .desktop-top>.main>.arrow {
            display: inline-block;
          }

          .wrapper .desktop-top>.main>.wix {
            fill: #fff;
            width: 28px;
            height: 14px;
            padding: 0 1px 4px 1px;
            vertical-align: middle;
          }

          .wrapper .desktop-top>.main>.wix>.dot {
            fill: #fc0;
          }

          .wrapper .desktop-top>.hover1,
          .wrapper .desktop-top>.hover2 {
            padding-left: 14px;
            line-height: 20px;
            display: none;
          }

          .wrapper .desktop-top>.hover2 {
            color: #459fed;
            padding-right: 4px;
          }

          .wrapper .desktop-top>.arrow {
            display: none;
            fill: none;
            stroke: #459fed;
            stroke-miterlimit: 10;
            stroke-width: 2px;
            height: 10px;
            width: 6px;
            padding-bottom: 5px;
            vertical-align: bottom;
          }

          .wrapper .desktop-bottom {
            position: fixed;
            width: 100%;
            height: 40px;
            background-color: #20303c;
            bottom: 0;
            max-height: 10vh;
            color: #ffffff;
            font-size: 14px;
            display: inline-block;
            line-height: 40px;
            text-align: center;
            letter-spacing: 0.05em;
            align-items: center;
            font-family: wixFreemiumFontW01-55Roma, wixFreemiumFontW02-55Roma, wixFreemiumFontW10-55Roma, Helvetica Neue, Helvetica, Arial, メイリオ, meiryo, ヒラギノ角ゴ pro w3, hiragino kaku gothic pro, sans-serif;
            transition: background-color 150ms;
            cursor: pointer;
            z-index: 999;
          }

          .wrapper .desktop-bottom.preview {
            cursor: default;
          }

          .wrapper .desktop-bottom:not(.preview):hover {
            background-color: #43515c;
          }

          .wrapper .desktop-bottom>.contents .wix-logo {
            fill: #fff;
            width: 36px;
            vertical-align: middle;
            padding-bottom: 6px;
            height: 16px;
          }

          .wrapper .desktop-bottom>.contents .wix-logo>.dot {
            fill: #fc0;
          }

          .wrapper .desktop-bottom>.contents .com {
            color: #ffffff;
          }

          .wrapper .desktop-bottom>.contents>.arrow {
            fill: none;
            stroke: #459fed;
            stroke-miterlimit: 10;
            stroke-width: 2px;
            height: 10px;
            padding-bottom: 1px;
            vertical-align: middle;
          }

          .wrapper .desktop-bottom>.contents>.second {
            color: #459fed;
            padding: 0 5px 0 6px;
          }

          @media (orientation: landscape) and (max-width: 600px) {
            .wrapper .mobile-top.not-preview {
              display: none;
            }
          }

          .wrapper .mobile-top {
            position: relative;
            display: block;
            height: 38px;
            top: 0px;
            width: 100%;
            font-family: wixFreemiumFontW01-65Medi, wixFreemiumFontW02-65Medi, wixFreemiumFontW10-65Medi, Helvetica Neue, Helvetica, Arial, メイリオ, meiryo, ヒラギノ角ゴ pro w3, hiragino kaku gothic pro, sans-serif;
            letter-spacing: 0.05em;
            font-size: 14px;
            color: #ffffff;
            background-color: #20303c;
            z-index: 999;
            text-align: center;
            cursor: default;
          }

          .wrapper .mobile-top.fixed-ad-mobile {
            position: fixed;
            width: 320px;
            z-index: 1000;
          }

          .wrapper .mobile-top>.first {
            display: inline-block;
            text-align: center;
            line-height: 38px;
          }

          .wrapper .mobile-top .wix-logo {
            fill: #fff;
            width: 30px;
            padding-bottom: 4px;
            vertical-align: middle;
            height: 15px;
          }

          .wrapper .mobile-top .wix-logo>.dot {
            fill: #fc0;
          }

          /* old banner*/
          .wixAds_wrapper-old.hidden {
            display: none;
          }

          .wixAds_wrapper-old.visible {
            display: block;
          }

          .wixAds_wrapper-old .wixAdsdesktopWADTop {
            position: fixed;
            z-index: 999;
            height: 26px;
            top: 0;
            right: 50px;
            overflow: hidden;
            background-color: #404040;
            border-radius: 0 0 6px 6px;
            pointer-events: all;
            cursor: pointer;
            -webkit-transition: all .3s ease-in-out;
            transition: all .3s ease-in-out;
          }

          .wixAds_wrapper-old .wixAdsdesktopWADTop:hover {
            height: 97px;
            background-color: rgba(50, 50, 50, 0.8);
          }

          .wixAds_wrapper-old .wixAdsdesktopWADTop:hover .topLabel {
            background-color: #222222;
          }

          .wixAds_wrapper-old .topLabel {
            padding: 6px;
            font-size: 13px;
            line-height: 1.3em;
            color: #FFF;
            width: 100%;
            font-size: 13px;
            color: #FFF;
            font-weight: bold;
            line-height: 18px;
            text-align: justify;
            padding: 5px 10px;
          }

          .wixAds_wrapper-old .topLabel .smallMusa {
            display: inline-block;
            text-indent: -9999px;
            width: 16px;
            height: 16px;
            margin-right: 5px;
            background-image: url("//static.wixstatic.com/media/0da768_0c5ce9e2ffa442bea0b79b690223a939~mv2.png");
            background-repeat: no-repeat;
            background-position: 0% 0%;
          }

          .wixAds_wrapper-old .topLabel .smallLogo {
            display: inline-block;
            text-indent: -9999px;
            width: 29px;
            height: 16px;
            background-image: url("//static.wixstatic.com/media/0da768_0c5ce9e2ffa442bea0b79b690223a939~mv2.png");
            background-repeat: no-repeat;
            background-position: -16px top;
          }

          .wixAds_wrapper-old .topContent {
            font-size: 13px;
            line-height: 1.3em;
            color: #ffffff;
            font-weight: bold;
            line-height: 18px;
            text-align: justify;
            padding: 5px 10px;
            width: 100%;
          }

          .wixAds_wrapper-old .topContent .emphasis {
            color: #ffcc00;
            line-height: 26px;
          }

          .wixAds_wrapper-old .desktop-bottom {
            position: fixed;
            z-index: 999;
            width: 100%;
            bottom: 0;
            max-height: 10vh;
          }

          .wixAds_wrapper-old .desktop-bottom:hover .siteBanner,
          .wixAds_wrapper-old .desktop-bottom:hover .footerLabel {
            background-color: #222222 !important;
          }

          .wixAds_wrapper-old .desktop-bottom .footerLabel {
            width: 100%;
            height: 40px;
            text-align: center;
            background-color: #404040;
            border-radius: 6px 6px 0 0;
            pointer-events: all;
            cursor: pointer;
          }

          .wixAds_wrapper-old .desktop-bottom .footerLabel .siteBanner {
            background-color: #404040;
            border-radius: 6px 6px 0 0;
            width: 100%;
            height: 100%;
            text-align: center;
          }

          .wixAds_wrapper-old .desktop-bottom .footerLabel .siteBanner .bigMusa {
            text-indent: -9999px;
            width: 36px;
            background-image: url("//static.wixstatic.com/media/0da768_0c5ce9e2ffa442bea0b79b690223a939~mv2.png");
            background-repeat: no-repeat;
            background-position: left bottom;
            position: relative;
            top: -19px;
          }

          .wixAds_wrapper-old .desktop-bottom .footerLabel .siteBanner .wrapper {
            padding: 5px 0;
          }

          .wixAds_wrapper-old .desktop-bottom .footerLabel .siteBanner .wrapper div {
            display: inline-block;
            height: 30px;
          }

          .wixAds_wrapper-old .desktop-bottom .footerLabel .siteBanner .txt {
            line-height: 47px;
            color: #ffffff;
            font-weight: bold;
            font-size: 15px;
          }

          .wixAds_wrapper-old .desktop-bottom .footerLabel .siteBanner .txt a {
            color: #ffffff;
          }

          .wixAds_wrapper-old .desktop-bottom .footerLabel .emphasis {
            color: #ffcc00;
            font-size: 16px;
            text-transform: uppercase;
          }

          .wixAds_wrapper-old .mobile-top {
            width: 100%;
            height: 30px;
            position: relative;
            display: block;
            text-align: center;
            background-color: #313131;
            z-index: 999;
          }

          .wixAds_wrapper-old .mobile-top .wixAdsmobileAdImg {
            height: 30px;
          }

          @media (orientation: landscape) and (max-width: 600px) {
            .wixAds_wrapper-old .mobile-top.not-preview {
              display: none;
            }
          }

          .wixAds_wrapper-old .spacer {
            line-height: 26px;
          }

          /*the ad font is Helvetica. we don't wont users to use it in the sites, so we changed the name of the font */
          @font-face {
            font-family: "wixFreemiumFontW01-35Thin";
            src: url("//static.parastorage.com/services/third-party/fonts/Helvetica/Fonts/56be84de-9d60-4089-8df0-0ea6ec786b84.eot?#iefix");
            src: url("//static.parastorage.com/services/third-party/fonts/Helvetica/Fonts/56be84de-9d60-4089-8df0-0ea6ec786b84.eot?#iefix") format("eot"), url("//static.parastorage.com/services/third-party/fonts/Helvetica/Fonts/50d35bbc-dfd4-48f1-af16-cf058f69421d.woff") format("woff"), url("//static.parastorage.com/services/third-party/fonts/Helvetica/Fonts/278bef59-6be1-4800-b5ac-1f769ab47430.ttf") format("truetype"), url("//static.parastorage.com/services/third-party/fonts/Helvetica/Fonts/2e309b1b-08b8-477f-bc9e-7067cf0af0b3.svg#2e309b1b-08b8-477f-bc9e-7067cf0af0b3") format("svg");
          }

          @font-face {
            font-family: "wixFreemiumFontW01-45Ligh";
            src: url("//static.parastorage.com/services/third-party/fonts/Helvetica/Fonts/ae1656aa-5f8f-4905-aed0-93e667bd6e4a.eot?#iefix");
            src: url("//static.parastorage.com/services/third-party/fonts/Helvetica/Fonts/ae1656aa-5f8f-4905-aed0-93e667bd6e4a.eot?#iefix") format("eot"), url("//static.parastorage.com/services/third-party/fonts/Helvetica/Fonts/530dee22-e3c1-4e9f-bf62-c31d510d9656.woff") format("woff"), url("//static.parastorage.com/services/third-party/fonts/Helvetica/Fonts/688ab72b-4deb-4e15-a088-89166978d469.ttf") format("truetype"), url("//static.parastorage.com/services/third-party/fonts/Helvetica/Fonts/7816f72f-f47e-4715-8cd7-960e3723846a.svg#7816f72f-f47e-4715-8cd7-960e3723846a") format("svg");
          }

          @font-face {
            font-family: "wixFreemiumFontW01-55Roma";
            src: url("//static.parastorage.com/services/third-party/fonts/Helvetica/Fonts/b7693a83-b861-4aa6-85e0-9ecf676bc4d6.eot?#iefix");
            src: url("//static.parastorage.com/services/third-party/fonts/Helvetica/Fonts/b7693a83-b861-4aa6-85e0-9ecf676bc4d6.eot?#iefix") format("eot"), url("//static.parastorage.com/services/third-party/fonts/Helvetica/Fonts/bcf54343-d033-41ee-bbd7-2b77df3fe7ba.woff") format("woff"), url("//static.parastorage.com/services/third-party/fonts/Helvetica/Fonts/b0ffdcf0-26da-47fd-8485-20e4a40d4b7d.ttf") format("truetype"), url("//static.parastorage.com/services/third-party/fonts/Helvetica/Fonts/da09f1f1-062a-45af-86e1-2bbdb3dd94f9.svg#da09f1f1-062a-45af-86e1-2bbdb3dd94f9") format("svg");
          }

          @font-face {
            font-family: "wixFreemiumFontW01-65Medi";
            font-weight: bold;
            src: url("//static.parastorage.com/services/third-party/fonts/Helvetica/Fonts/07fe0fec-b63f-4963-8ee1-535528b67fdb.eot?#iefix");
            src: url("//static.parastorage.com/services/third-party/fonts/Helvetica/Fonts/07fe0fec-b63f-4963-8ee1-535528b67fdb.eot?#iefix") format("eot"), url("//static.parastorage.com/services/third-party/fonts/Helvetica/Fonts/60be5c39-863e-40cb-9434-6ebafb62ab2b.woff") format("woff"), url("//static.parastorage.com/services/third-party/fonts/Helvetica/Fonts/4c6503c9-859b-4d3b-a1d5-2d42e1222415.ttf") format("truetype"), url("//static.parastorage.com/services/third-party/fonts/Helvetica/Fonts/36c182c6-ef98-4021-9b0d-d63122c2bbf5.svg#36c182c6-ef98-4021-9b0d-d63122c2bbf5") format("svg");
          }

          @font-face {
            font-family: "wixFreemiumFontW02-35Thin";
            src: url("//static.parastorage.com/services/third-party/fonts/Helvetica/Fonts/30b6ffc3-3b64-40dd-9ff8-a3a850daf535.eot?#iefix");
            src: url("//static.parastorage.com/services/third-party/fonts/Helvetica/Fonts/30b6ffc3-3b64-40dd-9ff8-a3a850daf535.eot?#iefix") format("eot"), url("//static.parastorage.com/services/third-party/fonts/Helvetica/Fonts/775a65da-14aa-4634-be95-6724c05fd522.woff") format("woff"), url("//static.parastorage.com/services/third-party/fonts/Helvetica/Fonts/988eaaa7-5565-4f65-bb17-146b650ce9e9.ttf") format("truetype"), url("//static.parastorage.com/services/third-party/fonts/Helvetica/Fonts/3503a1a6-91c3-4c42-8e66-2ea7b2b57541.svg#3503a1a6-91c3-4c42-8e66-2ea7b2b57541") format("svg");
          }

          @font-face {
            font-family: "wixFreemiumFontW02-45Ligh";
            src: url("//static.parastorage.com/services/third-party/fonts/Helvetica/Fonts/88fcd49a-13c7-4d0c-86b1-ad1e258bd75d.eot?#iefix");
            src: url("//static.parastorage.com/services/third-party/fonts/Helvetica/Fonts/88fcd49a-13c7-4d0c-86b1-ad1e258bd75d.eot?#iefix") format("eot"), url("//static.parastorage.com/services/third-party/fonts/Helvetica/Fonts/9a2e4855-380f-477f-950e-d98e8db54eac.woff") format("woff"), url("//static.parastorage.com/services/third-party/fonts/Helvetica/Fonts/fa82d0ee-4fbd-4cc9-bf9f-226ad1fcbae2.ttf") format("truetype"), url("//static.parastorage.com/services/third-party/fonts/Helvetica/Fonts/48d599a6-92b5-4d43-a4ac-8959f6971853.svg#48d599a6-92b5-4d43-a4ac-8959f6971853") format("svg");
          }

          @font-face {
            font-family: "wixFreemiumFontW02-55Roma";
            src: url("//static.parastorage.com/services/third-party/fonts/Helvetica/Fonts/0b3a3fca-0fad-402b-bd38-fdcbad1ef776.eot?#iefix");
            src: url("//static.parastorage.com/services/third-party/fonts/Helvetica/Fonts/0b3a3fca-0fad-402b-bd38-fdcbad1ef776.eot?#iefix") format("eot"), url("//static.parastorage.com/services/third-party/fonts/Helvetica/Fonts/d5af76d8-a90b-4527-b3a3-182207cc3250.woff") format("woff"), url("//static.parastorage.com/services/third-party/fonts/Helvetica/Fonts/1d238354-d156-4dde-89ea-4770ef04b9f9.ttf") format("truetype"), url("//static.parastorage.com/services/third-party/fonts/Helvetica/Fonts/b68875cb-14a9-472e-8177-0247605124d7.svg#b68875cb-14a9-472e-8177-0247605124d7") format("svg");
          }

          @font-face {
            font-family: "wixFreemiumFontW02-65Medi";
            font-weight: bold;
            src: url("//static.parastorage.com/services/third-party/fonts/Helvetica/Fonts/55f60419-09c3-42bd-b81f-1983ff093852.eot?#iefix");
            src: url("//static.parastorage.com/services/third-party/fonts/Helvetica/Fonts/55f60419-09c3-42bd-b81f-1983ff093852.eot?#iefix") format("eot"), url("//static.parastorage.com/services/third-party/fonts/Helvetica/Fonts/5b4a262e-3342-44e2-8ad7-719998a68134.woff") format("woff"), url("//static.parastorage.com/services/third-party/fonts/Helvetica/Fonts/4a3ef5d8-cfd9-4b96-bd67-90215512f1e5.ttf") format("truetype"), url("//static.parastorage.com/services/third-party/fonts/Helvetica/Fonts/58ab5075-53ea-46e6-9783-cbb335665f88.svg#58ab5075-53ea-46e6-9783-cbb335665f88") format("svg");
          }

          @font-face {
            font-family: "wixFreemiumFontW10-35Thin";
            src: url("//static.parastorage.com/services/third-party/fonts/Helvetica/Fonts/93b6bf6a-418e-4a8f-8f79-cb9c99ef3e32.eot?#iefix");
            src: url("//static.parastorage.com/services/third-party/fonts/Helvetica/Fonts/93b6bf6a-418e-4a8f-8f79-cb9c99ef3e32.eot?#iefix") format("eot"), url("//static.parastorage.com/services/third-party/fonts/Helvetica/Fonts/c881c21b-4148-4a11-a65d-f35e42999bc8.woff") format("woff"), url("//static.parastorage.com/services/third-party/fonts/Helvetica/Fonts/03634cf1-a9c9-4e13-b049-c90d830423d4.ttf") format("truetype"), url("//static.parastorage.com/services/third-party/fonts/Helvetica/Fonts/1bc99c0a-298b-46f9-b325-18b5e5169795.svg#1bc99c0a-298b-46f9-b325-18b5e5169795") format("svg");
          }

          @font-face {
            font-family: "wixFreemiumFontW10-45Ligh";
            src: url("//static.parastorage.com/services/third-party/fonts/Helvetica/Fonts/5b85c7cc-6ad4-4226-83f5-9d19e2974123.eot?#iefix");
            src: url("//static.parastorage.com/services/third-party/fonts/Helvetica/Fonts/5b85c7cc-6ad4-4226-83f5-9d19e2974123.eot?#iefix") format("eot"), url("//static.parastorage.com/services/third-party/fonts/Helvetica/Fonts/835e7b4f-b524-4374-b57b-9a8fc555fd4e.woff") format("woff"), url("//static.parastorage.com/services/third-party/fonts/Helvetica/Fonts/2c694ef6-9615-473e-8cf4-d8d00c6bd973.ttf") format("truetype"), url("//static.parastorage.com/services/third-party/fonts/Helvetica/Fonts/3fc84193-a13f-4fe8-87f7-238748a4ac54.svg#3fc84193-a13f-4fe8-87f7-238748a4ac54") format("svg");
          }

          @font-face {
            font-family: "wixFreemiumFontW10-65Medi";
            font-weight: bold;
            src: url("//static.parastorage.com/services/third-party/fonts/Helvetica/Fonts/7092fdcc-7036-48ce-ae23-cfbc9be2e3b0.eot?#iefix");
            src: url("//static.parastorage.com/services/third-party/fonts/Helvetica/Fonts/7092fdcc-7036-48ce-ae23-cfbc9be2e3b0.eot?#iefix") format("eot"), url("//static.parastorage.com/services/third-party/fonts/Helvetica/Fonts/5b29e833-1b7a-40ab-82a5-cfd69c8650f4.woff") format("woff"), url("//static.parastorage.com/services/third-party/fonts/Helvetica/Fonts/b0298148-2d59-44d1-9ec9-1ca6bb097603.ttf") format("truetype"), url("//static.parastorage.com/services/third-party/fonts/Helvetica/Fonts/ae1dea8c-a953-4845-b616-74a257ba72e6.svg#ae1dea8c-a953-4845-b616-74a257ba72e6") format("svg");
          }

          @font-face {
            font-family: "wixFreemiumFontW10-55Roma";
            src: url("//static.parastorage.com/services/third-party/fonts/Helvetica/Fonts/f1feaed7-6bce-400a-a07e-a893ae43a680.eot?#iefix");
            src: url("//static.parastorage.com/services/third-party/fonts/Helvetica/Fonts/f1feaed7-6bce-400a-a07e-a893ae43a680.eot?#iefix") format("eot"), url("//static.parastorage.com/services/third-party/fonts/Helvetica/Fonts/8ac9e38d-29c6-41ea-8e47-4ae4d2b1a4e1.woff") format("woff"), url("//static.parastorage.com/services/third-party/fonts/Helvetica/Fonts/4bd09087-655e-4abb-844c-dccdeb68003d.ttf") format("truetype"), url("//static.parastorage.com/services/third-party/fonts/Helvetica/Fonts/df234d87-eada-4058-aa80-5871e7fbe1c3.svg#df234d87-eada-4058-aa80-5871e7fbe1c3") format("svg");
          }

          .wix-ads-2 {
            width: 100%;
          }

          .wix-ads-2.hidden {
            display: none;
          }

          .wix-ads-2.visible {
            display: block;
            visibility: visible;
          }

          .wix-ads-2.desktop {
            z-index: 999;
            position: fixed;
            top: 0;
          }

          .wix-ads-2.mobile {
            z-index: 999;
          }

          .wix-ads-2 .rtl {
            direction: rtl;
          }

          .wix-ads-2 .ltr {
            direction: ltr;
          }

          .wix-ads-2 .desktop-top {
            height: 50px;
            box-sizing: border-box;
            background: #eff1f2;
            display: flex;
            justify-content: center;
            align-items: center;
            border-bottom: 3px solid #a0138e;
            width: 100%;
          }

          .wix-ads-2 .desktop-top.overlay {
            background-color: #ff0000;
            border: none;
          }

          .wix-ads-2 .desktop-top.preview {
            cursor: default;
          }

          .wix-ads-2 .desktop-top>.contents {
            display: flex;
            align-items: center;
          }

          .wix-ads-2 .desktop-top>.contents .text {
            font-family: wixFreemiumFontW01-65Medi, wixFreemiumFontW02-65Medi, wixFreemiumFontW10-65Medi, Helvetica Neue, Helvetica, Arial, メイリオ, meiryo, ヒラギノ角ゴ pro w3, hiragino kaku gothic pro, sans-serif;
            font-size: 14px;
            color: #20303C;
            line-height: 24px;
            flex-shrink: 0;
          }

          .wix-ads-2 .desktop-top>.contents .text .wix-logo {
            fill: #20303C;
            width: 36px;
            vertical-align: middle;
            padding-bottom: 6px;
            height: 16px;
          }

          .wix-ads-2 .desktop-top>.contents .text .wix-logo>.dot {
            fill: #fc0;
          }

          .wix-ads-2 .desktop-top>.contents .text .com {
            color: #20303C;
          }

          .wix-ads-2 .desktop-top>.contents .button {
            font-family: wixFreemiumFontW01-65Medi, wixFreemiumFontW02-65Medi, wixFreemiumFontW10-65Medi, Helvetica Neue, Helvetica, Arial, メイリオ, meiryo, ヒラギノ角ゴ pro w3, hiragino kaku gothic pro, sans-serif;
            font-size: 14px;
            color: #a0138e;
            border: 1px solid #a0138e;
            display: inline-flex;
            width: 112px;
            height: 35px;
            justify-content: center;
            align-items: center;
            border-radius: 17px;
            flex-shrink: 0;
            text-align: center;
          }

          .wix-ads-2 .desktop-top>.contents .button.ltr {
            margin-left: 6px;
          }

          .wix-ads-2 .desktop-top>.contents .button.rtl {
            margin-right: 6px;
          }

          .wix-ads-2 .desktop-top:not(.overlay):hover {
            cursor: pointer;
            background: #fff;
          }

          .wix-ads-2 .desktop-top:not(.overlay):hover .button {
            color: #fff;
            background-color: #a0138e;
          }

          .wix-ads-2 .mobile-top {
            height: 38px;
            box-sizing: border-box;
            background: #eff1f2;
            display: flex;
            justify-content: center;
            align-items: center;
            border-bottom: 3px solid #a0138e;
            width: 100%;
            position: relative;
            top: 0;
            z-index: 1;
          }

          .wix-ads-2 .mobile-top.overlay {
            background-color: #ff0000;
            border: none;
          }

          .wix-ads-2 .mobile-top.fixed-ad-mobile {
            position: fixed;
            width: 320px;
            z-index: 1000;
          }

          .wix-ads-2 .mobile-top .content {
            font-family: wixFreemiumFontW01-65Medi, wixFreemiumFontW02-65Medi, wixFreemiumFontW10-65Medi, Helvetica Neue, Helvetica, Arial, メイリオ, meiryo, ヒラギノ角ゴ pro w3, hiragino kaku gothic pro, sans-serif;
            font-size: 14px;
            color: #20303C;
            line-height: 10px;
            letter-spacing: 0.05em;
            align-items: baseline;
            display: flex;
          }

          .wix-ads-2 .mobile-top .content .wix-logo {
            fill: #20303C;
            vertical-align: middle;
            padding: 0 5px;
            height: 10.5px;
          }

          .wix-ads-2 .mobile-top .content .wix-logo>.dot {
            fill: #fc0;
          }

          .wix-ads-2 .mobile-top.one-app-banner .content {
            font-family: wixFreemiumFontW01-55Roma, wixFreemiumFontW02-55Roma, wixFreemiumFontW10-55Roma, Helvetica Neue, Helvetica, Arial, メイリオ, meiryo, ヒラギノ角ゴ pro w3, hiragino kaku gothic pro, sans-serif;
            font-size: 16px;
            color: #1c1c1c;
            line-height: 38px;
          }

          .wix-ads-2 .mobile-top.one-app-banner .wix-logo {
            padding: 0 2px 0 6px;
          }

          .wix-ads-2 .mobile-top.one-app-banner .download-logo {
            height: 22px;
            align-self: center;
            padding-left: 10px;
            margin-left: -4px;
          }

          </body></html>