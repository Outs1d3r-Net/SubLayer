
import importlib
from  selenium  import  webdriver 
from selenium.webdriver.common.keys import Keys
import time
browser  =  webdriver . Firefox () 
browser.get('https://metadefender.opswat.com/?lang=en')
time.sleep(4)
username = browser.find_element_by_xpath('/html/body/div[1]/div[1]/div/div/div/div/div[1]/div[2]/div[1]/div/div/div[2]/div/div[1]/div[1]/div/input')
 
username.send_keys('')
btn = browser.find_element_by_xpath('/html/body/div[1]/div[1]/div/div/div/div/div[1]/div[2]/div[1]/div/div/div[2]/div/div[2]/div[2]/button[1]').click()

quit()