FROM node:alpine
 
WORKDIR /usr/app
 
COPY package.json /usr/app
COPY package-lock.json /usr/app
RUN npm install
 
# Bundle app source
COPY . .
 
EXPOSE 9001
 
CMD npm start