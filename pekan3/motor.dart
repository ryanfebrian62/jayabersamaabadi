class motor {
  String warnamotor;
  String merk;

  motor(this.warnamotor, this.merk);

  setwarnaMotor(String warnaBaru) {
    warnamotor = warnaBaru;
  }

  String get warna => warnamotor;

  void info() {
    print("motor dengan warna $warnamotor dan merk $merk");
  }
}
void main() {
  motor motorA = motor("Tricolor","Mvagusta");
  motor motorB = motor("Merah", "Aprilia");

  motorA.info();
  motorB.info();

}