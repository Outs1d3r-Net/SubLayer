

import importlib
from  selenium  import  webdriver 
from selenium.webdriver.common.keys import Keys
import time

browser  =  webdriver . Firefox () 
browser.get('https://metadefender.opswat.com/?lang=en')
browser.minimize_window()
time.sleep(4)
username = browser.find_element_by_xpath('/html/body/div[1]/div[1]/div/div/div/div/div[1]/div[2]/div[1]/div/div/div[2]/div/div[1]/div[1]/div/input')  
username.send_keys('db349b97c37d22f5ea1d1841e3c89eb4')
path = 'img/scrape.png'
btn = browser.find_element_by_xpath('/html/body/div[1]/div[1]/div/div/div/div/div[1]/div[2]/div[1]/div/div/div[2]/div/div[2]/div[2]/button[1]').click()
time.sleep(6)

el = browser.find_element_by_xpath('/html/body/div[1]/div[1]/div/div[2]')
el.screenshot(path) 

browser.quit()
