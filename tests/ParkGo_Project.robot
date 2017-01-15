*** Settings ***
Documentation    A test suite containing tests related to search some keywords on Google search
...              Created By Phannida P
Library          Selenium2Library


*** Variables ***
${URL}                      http://128.199.123.121/calculate.php
${Browser}                  Chrome
${DELAY}                    0
${Total1}                    40
${Receive1}                  50

${Total2}                    40
${Receive2}                  20



*** Test Cases ***
System is able to change money successfully 1
    Open Browser           ${URL}?total=${Total1}       ${Browser}
    Input Receive Money    ${Receive1}
    Submit Money
    Expected Return Change Success
    Close Browser

System is able to change money unsuccessfully 2
    Open Browser           ${URL}?total=${Total2}       ${Browser}
    Input Receive Money    ${Receive2}
    Submit Money
    Expected Return Change Success
    Close Browser


*** Keywords ***
Input Total Parking
    [arguments]   ${txTotal}
    Input Text    txTotal    ${txTotal}

Input Receive Money
    [arguments]   ${txReceive}
    Input Text    txReceive   ${txReceive}

Submit Money
    Click Button    bnSubmit

Expected Return Change Success
    Element Text Should Be   bank10    1

Expected Return Change Unsuccess
    Page Should Contain    -








