import os
import hashlib

string1 = 'd64a84456adc959f56de6af685d0dadd'
string2 = '8d8a1b73876ca678cc3afa372e5199de'

word1 = ''
word2 = ''

path = './dic-0294'



listing = os.listdir(path)
for infile in listing:
    file = open(path + '/' + infile, 'r')
    for buffer in file:
        	buffer = buffer.strip()
        	m = hashlib.md5()
		m.update(buffer)
		if m.hexdigest() == string1:
			word1 = buffer
		if m.hexdigest() == string2:
			word2 = buffer
		if word1 != '' and word2 != '':
			break
			
print word1 + ' ' + word2
