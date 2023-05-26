# -*- coding: utf-8 -*-
#url===========https://programmersought.com/article/57963551658/
import numpy as np
import cv2
img = cv2.imread('img3.png' )          # queryImage
img2 = cv2.imread('img4.png' ) # trainImage

gray = cv2.cvtColor(img, cv2.COLOR_BGR2GRAY)
gray2 = cv2.cvtColor(img2, cv2.COLOR_BGR2GRAY)

#      
detector = cv2.ORB_create()
kp1, des1 = detector.detectAndCompute(gray, None)
kp2, des2 = detector.detectAndCompute(gray2, None)

#Comparators 
bf = cv2.BFMatcher(cv2.NORM_HAMMING)


# Load feature points
matches = bf.match(des1, des2)
matches = sorted(matches, key = lambda x:x.distance)

# Indicates the result
h1, w1, c1 = img.shape[:3]
h2, w2, c2 = img2.shape[:3]
height = max([h1,h2])
width = w1 + w2
out = np.zeros((height, width, 3), np.uint8)
cv2.drawMatches(img, kp1, img2, kp2, matches[:50],out, flags=0)
cv2.imshow("out.jpg", out)
cv2.waitKey(0)