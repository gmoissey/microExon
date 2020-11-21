"""
Auhtor: Moisseyev Gleb
2020 11 20

Little script to convert csv files matrix files into json

Usage: python csvToJson.pu <directory>
"""

import glob
import os
import json
import sys

from progress.bar import Bar
from csv import DictReader
from csv import reader

files = glob.glob(sys.argv[1] + '/*.csv')
bar = Bar('Processing', max=len(files))
data = {}

for fileName in files:

    with open(fileName, 'r') as readObj:
        csvReader = reader(readObj)
        data = {}

        iterator = iter(csvReader)
        next(iterator)
        for row in csvReader:
            data[row[0]] = row[1:]

    fileName = fileName[:len(fileName) - 3] + 'json'

    with open(fileName, 'w') as fp:
        json.dump(data, fp, indent=4, sort_keys=True)

    bar.next()





