import importlib
from selenium import webdriver

driver  =  webdriver . Firefox () 
url = 'https://stackoverflow.com/'
path = 'img/scrape.png'

driver.get(url)
el = driver.find_element_by_tag_name('body')
el.screenshot(path)
driver.quit()
