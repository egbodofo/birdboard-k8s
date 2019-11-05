docker build -t egbodofo/birdboard-app:latest -t egbodofo/birdboard-app:$SHA -f "Dockerfile" .

docker push egbodofo/birdboard-app:latest

docker push egbodofo/birdboard-app:$SHA

kubectl apply -f k8s
kubectl set image deployments/birdboard-deployment birdboard=egbodofo/birdboard-app:$SHA
