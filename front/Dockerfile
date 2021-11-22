FROM node:lts-alpine

RUN yarn global add @vue/cli
RUN yarn global add @vue/cli-init

WORKDIR /usr/app

COPY . .

RUN npm install

EXPOSE 8080

CMD ["npm", "run", "serve"]